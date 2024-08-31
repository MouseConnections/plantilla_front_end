<?php

use App\Models\Log;
use App\Models\Module;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

if (!function_exists('generateAccess')) {
    function generateAccess()
    {
        if (auth()->user()->rol->status) {
            $accesos_by_submenu = [];
            $rol_module_access = auth()->user()->rol->rol_module_acces;
            foreach ($rol_module_access as $key => $access) {
                $menu_status = is_null($access->submenu) ?  1 : $access->submenu->menu->status;
                if (!($access->permission->name == 'read' && $access->status) || ($menu_status == 0)) {
                    continue;
                }

                $menu_name = is_null($access->submenu) ?  'Sin_menu' : $access->submenu->menu->name;
                $menu_icon = is_null($access->submenu) ? '' : $access->submenu->menu->icon;
                $menu_key = is_null($access->submenu) ? '' : $access->submenu->menu->key;
                $submenu_name = is_null($access->submenu) ? $access->module->name : $access->submenu->name;


                if (!array_key_exists($menu_name, $accesos_by_submenu)) {
                    $accesos_by_submenu[$menu_name] = [
                        "icon_menu" => $menu_icon,
                        "key_menu" => $menu_key,
                        "submenus" => [],
                    ];
                }

                if (!in_array($submenu_name, $accesos_by_submenu[$menu_name])) {
                    $accesos_by_submenu[$menu_name]['submenus'][$submenu_name]['prefix_module'] = $access->module->prefix;
                    $accesos_by_submenu[$menu_name]['submenus'][$submenu_name]['key_module'] = $access->module->key;
                }
            }
        } else {
            $rol_module_access = null;
            $accesos_by_submenu = null;
        }
        // dd($accesos_by_submenu);
        // return [$rol_module_access, $accesos_by_submenu];
        return $accesos_by_submenu;
    }
}
