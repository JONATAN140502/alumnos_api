<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Jonatan Arturo Mayanga Muñoz',
           'email' => 'jamm@gmail.com',
           'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Custodio Zuñe Mauricio',
            'email' => 'Czuñer2@gmail.com',
            'password' => bcrypt('123456')
         ]);
    }
}
