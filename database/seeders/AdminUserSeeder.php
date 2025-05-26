<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $adminExits = User::where('email','adminmeghraj@gmail.com')->exists();

        if(!$adminExits){
            User::create([
                'name'=>'Meghadmin',
                'city' => 'Admin City',
                'email' => 'adminmeghraj@gmail.com',
                'password' => Hash::make('meghadmin'),
                'role'=>'admin',
            ]);

            $this->command->info('Admin user created successfully');
        }else{
            $this->command->info('Amin user already exists');
        }
    }
}
