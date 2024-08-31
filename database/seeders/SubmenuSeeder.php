<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Module;
use App\Models\Submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Submenu::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $md = Module::all();
        $menu = Menu::all();

        $moduleCategories = [
            'Dashboard' => [
                'dashboard.ecommerce',
                'dashboard.sales',
            ],
            'Email' => [
                'email.inbox',
                'email.read',
            ],
            'Ecommerce' => [
                'ecommerce.products',
                'ecommerce.product.detail',
                'ecommerce.orders',
                'ecommerce.customers',
                'ecommerce.cart',
                'ecommerce.checkout',
                'ecommerce.shops',
                'ecommerce.add.product',
            ],
            'Invoices' => [
                'invoices.list',
                'invoices.detail',
            ],
            'Contacts' => [
                'contacts.grid',
                'contacts.list',
                'contacts.profile',
            ],
            'UI Elements' => [
                'components.ui.alerts',
                'components.ui.buttons',
                'components.ui.cards',
                'components.ui.carousel',
                'components.ui.dropdowns',
                'components.ui.grid',
                'components.ui.images',
                'components.ui.lightbox',
                'components.ui.modals',
                'components.ui.offcanvas',
                'components.ui.rangeslider',
                'components.ui.progressbars',
                'components.ui.sweet.alert',
                'components.ui.tabs.accordions',
                'components.ui.typography',
                'components.ui.video',
                'components.ui.general',
                'components.ui.colors',
                'components.ui.rating',
                'components.ui.notifications',
            ],
            'Forms' => [
                'components.form.elements',
                'components.form.layouts',
                'components.form.validation',
                'components.form.advanced',
                'components.form.editors',
                'components.form.uploads',
                'components.form.wizard',
                'components.form.mask',
            ],
            'Tables' => [
                'components.table.basic',
                'components.table.advanced',
            ],
            'Charts' => [
                'components.chart.apex',
                'components.chart.chartjs',
                'components.chart.tui',
            ],
            'Icons' => [
                'components.icon.evaicons',
                'components.icon.boxicons',
                'components.icon.materialdesign',
                'components.icon.fontawesome',
            ],
            'Maps' => [
                'components.map.google',
                'components.map.vector',
                'components.map.leaflet',
            ],
            'Authentication' => [
                'components.auth.login',
                'components.auth.register',
                'components.auth.recoverpw',
                'components.auth.lock-screen',
                'components.auth.logout',
                'components.auth.confirm-mail',
                'components.auth.email-verification',
                'components.auth.two-step-verification',
            ],
            'Utility' => [
                'components.page.starter',
                'components.page.maintenance',
                'components.page.comingsoon',
                'components.page.timeline',
                'components.page.faqs',
                'components.page.pricing',
                'components.page.404',
                'components.page.500',
            ],
        ];

        foreach ($md as $module) {
            foreach ($menu as $menuEntry) {
                $category = null;

                foreach ($moduleCategories as $menuName => $modules) {
                    if (in_array($module->prefix, $modules) && $menuEntry->name == $menuName) {
                        $category = $menuName;
                        break;
                    }
                }

                if ($category != null) {
                    Submenu::create([
                        'name' => $module->name,
                        'id_module' => $module->id,
                        'id_menu' => $menuEntry->id,
                        'status' => 1,
                    ]);
                }
            }
        }
    }
}
