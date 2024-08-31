<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    public $rols = ['superusuario', 'test'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Rol::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


        foreach ($this->rols as $key => $value) {
            Rol::create([
                'name' => $value,
                'status' => 1,
            ]);
        }
    }
}
