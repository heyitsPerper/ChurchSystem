<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConsumerProfileRequest;
use App\Http\Requests\ConsumerSignUpRequest;
use App\Mail\ConsumerMail;
use App\Models\Announcements;
use App\Models\ChapelOfficials;
use App\Models\ChurchOfficials;
use App\Models\Consumer;
use App\Helpers\PurokHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ConsumerAuthController extends Controller
{
    public function loginForm()
    {
        return view('consumer.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('consumer')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('consumer.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function signup()
    {
        return view('consumer.register');
    }

    public function register(ConsumerSignUpRequest $request)
    {
        $data = $request->all();
        $code = rand(000001, 999999);

        Mail::to($request->email)->send(new ConsumerMail($request->firstname, $request->lastname, $code));

        $request->session()->put(['data' => $data, 'code' => $code]);
        return redirect(route('consumer.confirmForm'));
    }

    public function confirmForm()
    {
        if (!session()->get('code')) {
            return redirect(route('consumer.loginForm'));
        }
        return view('consumer.confirm');
    }

    public function confirm(Request $request)
    {
        if (!($request->session()->get('code') ==  $request->code_confirm)) {
            return view('consumer.confirm', ['error' => 'Invalid Confirmation Code!']);
        }

        $data = $request->session()->get('data');
        Consumer::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'purok' => $data['purok'],
            'contact_number' => $data['contact_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $request->session()->forget(['data', 'code']);

        $user = Arr::only($data, ['email', 'password']);

        if (Auth::guard('consumer')->attempt($user)) {
            $request->session()->regenerate();

            return redirect(route('consumer.dashboard'));
        }

        return redirect(route('consumer.loginForm'))->with('success', 'Your account successfully registered, login your account');
    }

    public function dashboard()
    {
        $currentAnnouncements = Announcements::where('date', now()->format('Y-m-d'))->where('purok', 'all')
        ->orWhere('purok', auth()->guard('consumer')->user()->purok)->where('date', now()->format('Y-m-d'))
        ->get();

        $upcomingAnnouncements = Announcements::where('date', '>', now()->format('Y-m-d'))->where('purok', 'all')
        ->orWhere('purok', auth()->guard('consumer')->user()->purok)->where('date', '>', now()->format('Y-m-d'))
        ->get();

        return view('consumer.dashboard', [
            'currentAnnouncements' => $currentAnnouncements,
            'upcomingAnnouncements' => $upcomingAnnouncements,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile(Request $request)
    {
        $puroks = PurokHelper::getPurok();
        $puroks = array_except($puroks, 0);
        return view('consumer.profile', ['puroks' => $puroks]);
    }

    public function update(ConsumerProfileRequest $request)
    {
        $req  = $request->validated();

        if ($req['password'] == null) {
            unset($req['password']);
        }

        Auth::guard('consumer')->user()->update($req);
        return redirect()->back()->with('success', 'Profile successfully updated!');
    }
}
