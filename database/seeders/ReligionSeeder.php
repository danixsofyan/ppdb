<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::create([
            'name'          => 'Islam',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Religion::create([
            'name'          => 'Kristen',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Religion::create([
            'name'          => 'Hindu',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Religion::create([
            'name'          => 'Budha',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Religion::create([
            'name'          => 'Katolik',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Religion::create([
            'name'          => 'Konghucu',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
