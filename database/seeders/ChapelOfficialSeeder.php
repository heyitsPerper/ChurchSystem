<?php

namespace Database\Seeders;

use App\Models\ChapelOfficials;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ChapelOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChapelOfficials::create([
            'chapel_location' => 'Purok 1',
            'president_name' => 'Alfredo Ruiz',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 2',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 3',
            'president_name' => 'Alex Perez',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 4',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 5',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 6',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 7',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 8',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);

        ChapelOfficials::create([
            'chapel_location' => 'Purok 9',
            'president_name' => 'Siri Pepe',
            'contact_number' => '09306659836'
        ]);
    }
}
