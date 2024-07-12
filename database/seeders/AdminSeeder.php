<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'number' => '1234567890',
            'password' => Hash::make('password'),
        ]);

        // Berikan peran admin ke pengguna ini
        $admin->assignRole('admin');

        // Buat profil pengguna admin
        Profile::create([
            'user_id' => $admin->id,
            'bio' => 'Admin user profile',
            'avatar' => null,
            'location' => 'Admin Location',
            'birthdate' => null,
            'followers_count' => 0,
            'following_count' => 0,
        ]);
    }
}
