<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    // public function sendSms()
    // {
    //     $basic  = new \Nexmo\Client\Credentials\Basic('0bd5607d', 'dZRdxg7xJdLsw1lC');
    //     $client = new \Nexmo\Client($basic);

    //     $message = $client->message()->send([
    //         'to' => '9178781045',
    //         'from' => '9178781045',
    //         'text' => 'SMS notification sent using Vonage SMS API'
    //     ]);

    //     dd('SMS has sent.');
    // }

    public function index()
    {
        $consumers = Consumer::where('purok', 'purok 1')->get();

        foreach ($consumers as $consumer) {
            echo $consumer;
        }

        // Nexmo::message()->send([
        //     'to' => '639178781045',
        //     'from' => 'Church Hilongos',
        //     'text' => 'Example text message'
        // ]);

        // echo 'TExt message sent';
    }
}
