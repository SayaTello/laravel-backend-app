<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Saiful Bahri',
            'email' => 'bagri@gmail.com',
            'role' => 'admin',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
            'phone' => '12345623524',
            'bio' => 'lorem ipsum dolor sit amet, consectet',
        ]);
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'role' => 'superadmin',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
            'phone' => '62105498539',
            'bio' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos vero vitae iusto temporibus voluptatum? Quam recusandae perspiciatis vel enim, laudantium quasi amet error itaque in nihil, libero facere facilis voluptatibus?',
        ]);
    }
}
