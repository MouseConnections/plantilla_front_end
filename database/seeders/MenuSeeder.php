<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public $menus = [
        'Dashboard' => ['icon' => 'bx-home',  'key' => 'dashboard'],
        'Email' => ['icon' => 'bx-envelope',  'key' => 'email'],
        'Ecommerce' => ['icon' => 'bx-store',  'key' => 'ecommerce'],
        'Invoices' => ['icon' => 'bx-receipt',  'key' => 'invoices'],
        'Contacts' => ['icon' => 'bx-user-circle',  'key' => 'contacts'],
        'UI Elements' => ['icon' => 'bx-cube',  'key' => 'ui-elements'],
        'Forms' => ['icon' => 'bx-layout',  'key' => 'forms'],
        'Tables' => ['icon' => 'bx-table',  'key' => 'tables'],
        'Charts' => ['icon' => 'bx-pie-chart-alt-2',  'key' => 'charts'],
        'Icons' => ['icon' => 'bx-cuboid',  'key' => 'icons'],
        'Maps' => ['icon' => 'bx-map-alt',  'key' => 'maps'],
        'Authentication' => ['icon' => 'bx-user-pin',  'key' => 'authentication'],
        'Utility' => ['icon' => 'bx-file',  'key' => 'utility'],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Menu::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach ($this->menus as $key => $value) {
            Menu::create([
                'name' => $key,
                'icon' => $value['icon'],
                'key' => $value['key'],
                'status' => 1,
            ]);
        }
    }
}
