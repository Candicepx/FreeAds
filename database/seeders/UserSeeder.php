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
        User::factory()
            ->count(10)
            ->create();

        User::factory()->create([
            'is_admin' => 1,
            'name' => 'Candice',
            'email' => 'candice@gmail.com',
            'password' => Hash::make("12345678"),
        ])->save();
        
    }
}
