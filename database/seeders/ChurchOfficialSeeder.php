<?php

namespace Database\Seeders;

use App\Models\ChurchOfficials;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ChurchOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChurchOfficials::create([
            'position' => 'President',
            'official_name' => 'Ferlyn Ruiz',
            'contact_number' => '09306659836'
        ]);

        ChurchOfficials::create([
            'position' => 'Vice President',
            'official_name' => 'Asiley Pepe',
            'contact_number' => '09483627515'
        ]);

        ChurchOfficials::create([
            'position' => 'Secretary',
            'official_name' => 'Marilou Rubio',
            'contact_number' => '09518340663'
        ]);

        ChurchOfficials::create([
            'position' => 'Treasurer',
            'official_name' => 'Elaine Perez',
            'contact_number' => '09553753940'
        ]);

        ChurchOfficials::create([
            'position' => 'Auditor',
            'official_name' => 'Emilyn Ranollo',
            'contact_number' => '09554496072'
        ]);
    }
}
