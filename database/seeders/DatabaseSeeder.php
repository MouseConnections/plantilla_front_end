<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RolSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(RoleAccessSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SubmenuSeeder::class);


        $rol_id = Rol::where('name', 'superusuario')->pluck('id')[0];
        User::create([
            'name' => 'Admin',
            'email' => 'admin@themesbrand.com',
            'password' => Hash::make('12345678'),
            'email_verified_at'=> now(),
            'created_at' => now(),
            'status' => 1,
            'id_rol' => $rol_id,
        ]);

        $rol_id = Rol::where('name', 'test')->pluck('id')[0];
        User::create([
            'name' => 'Axel',
            'email' => 'axel.aatl@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at'=> now(),
            'created_at' => now(),
            'status' => 1,
            'id_rol' => $rol_id,
        ]);
    }
}
