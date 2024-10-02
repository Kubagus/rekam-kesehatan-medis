<?php

namespace Database\Seeders;


use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create(['name' => 'admin', 'description' => 'administrator']);
        Role::create(['name' => 'Register', 'description' => 'Pendaftaran']);
        Role::create(['name' => 'Dokter', 'description' => 'Dokter']);
    }
}
