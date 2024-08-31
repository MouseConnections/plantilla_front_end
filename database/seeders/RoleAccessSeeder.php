<?php

namespace Database\Seeders;

use App\Models\RoleAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        RoleAccess::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $id_rol = DB::table('rols')->where('name', 'superusuario')->value('id');
        $modules = DB::table('modules')->get();
        $permissions = DB::table('permissions')->get();

        foreach ($modules as $module) {
            foreach ($permissions as $permission) {
                RoleAccess::create([
                    'id_rol' => $id_rol,
                    'id_module' => $module->id,
                    'id_permission' => $permission->id,
                    'status' => 1,
                ]);
            }
        }
    }
}
