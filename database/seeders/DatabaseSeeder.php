<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Azhar Arrozak',
            'email' => 'azhardrozak2001@upi.edu',
            'password' => bcrypt('azharazhar'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Dewa Alvario',
            'email' => 'dewaalvario@upi.edu',
            'password' => bcrypt('dewadewa'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Fadhil Azzam',
            'email' => 'fadhil05@upi.edu',
            'password' => bcrypt('fadhilfadhil'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Miftah Rizky Alamsyah',
            'email' => 'miftahrizkyalamsyah@upi.edu',
            'password' => bcrypt('miftahmiftah'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Reginald Piesta',
            'email' => 'regi_direja@upi.edu',
            'password' => bcrypt('reginaldreginald'),
            'is_admin' => true,
        ]);
    }
}
