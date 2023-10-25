<?php

namespace Database\Seeders;

use App\Models\MachineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MachineTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MachineType::create([
            'machine_type_name' => 'Collar Sewing',
            'machine_type_slug' => Str::slug('Collar Sewing')
        ]);

        MachineType::create([
            'machine_type_name' => 'Button Sewing',
            'machine_type_slug' => Str::slug('Button Sewing')
        ]);

        MachineType::create([
            'machine_type_name' => 'Chest Sewing',
            'machine_type_slug' => Str::slug('Chest Sewing')
        ]);
    }
}
