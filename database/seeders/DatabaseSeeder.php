<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Church System',
            'email' => 'churchsystem101@gmail.com',
            'password' => Hash::make('11111111'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $this->call([
            ConsumerSeeder::class
        ]);
    }
}
