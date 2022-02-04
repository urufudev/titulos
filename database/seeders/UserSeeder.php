<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin

        User::updateOrCreate([
            
            'name' => 'Administrador',
            'ap_paterno' => 'DREA',
            'ap_materno' => 'AYACUCHO',
            'dni' => '12345678',
            'email' => 'admin@drea.com',
            'password' => Hash::make('123'),
            'status' => true,
           
        ]);

        // Create user
        
        /* User::updateOrCreate([
            
            'name' => 'Jone Doe',
            'ap_paterno' => 'DREA',
            'ap_materno' => 'AYACUCHO',
            'dni' => '12345679',
            'email' => 'user@mail.com',
            'password' => Hash::make('123'),
            'status' => true,
            
        ]); */

        /* User::factory()->times(100)->create(); */
    
    }
}
