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
            'provider_id'   => '100276948320179162456',
            'provider_photo'    => 'https://lh3.googleusercontent.com/a-/AOh14Ghv49bhoxyJIGq0WeakH91tP1AulRRsQ-x4B73l=s96-c',
            'password'  => bcrypt('123qweasd'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super Admin');
    }
}
