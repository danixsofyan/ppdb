<?php

namespace Database\Seeders;

use App\Models\User;
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
        $superadmin = User::create([
            'name'      => 'Dani Sofyan',
            'email'     => 'danixsofyan@gmail.com',
            'provider_id'   => '113879050349776823920',
            'provider_photo'    => 'https://lh3.googleusercontent.com/a/ACg8ocJNSpWaZgPlzgotuQjaUdtdBfN4GrVLCIPSIfS4VQAOQyc=s96-c',
            'password'  => bcrypt('123qweasd'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super Admin');
    }
}
