<?php

namespace Database\Seeders;

use App\Models\Consumer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ConsumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consumer::create([
            'firstname' => 'Ferlyn',
            'lastname' => 'Ruiz',
            'purok' => 'purok 1',
            'contact_number' => '639178781045',
            'email' => 'ferlynruiz1234@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
