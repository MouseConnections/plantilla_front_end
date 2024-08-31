<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{

    public $routes = [
        [
            'prefix' => 'dashboard.ecommerce',
            'name' => 'Ecommerce',
            'key' => 'ecommerce',
        ],
        [
            'prefix' => 'dashboard.sales',
            'name' => 'Sales',
            'key' => 'sales',
        ],
        [
            'prefix' => 'email.inbox',
            'name' => 'Inbox',
            'key' => 'inbox',
        ],
        [
            'prefix' => 'email.read',
            'name' => 'Read Email',
            'key' => 'read-email',
        ],
        [
            'prefix' => 'calendar.index',
            'name' => 'Calendar',
            'key' => 'calendar',
        ],
        [
            'prefix' => 'todo.index',
            'name' => 'Todo',
            'key' => 'todo',
        ],
        [
            'prefix' => 'filemanager',
            'name' => 'File Manager',
            'key' => 'filemanager',
        ],
        [
            'prefix' => 'chat.index',
            'name' => 'Chat',
            'key' => 'chat',
        ],
        [
            'prefix' => 'ecommerce.products',
            'name' => 'Products',
            'key' => 'products',
        ],
        [
            'prefix' => 'ecommerce.product.detail',
            'name' => 'Product Detail',
            'key' => 'product-detail',
        ],
        [
            'prefix' => 'ecommerce.orders',
            'name' => 'Orders',
            'key' => 'orders',
        ],
        [
            'prefix' => 'ecommerce.customers',
            'name' => 'Customers',
            'key' => 'customers',
        ],
        [
            'prefix' => 'ecommerce.cart',
            'name' => 'Cart',
            'key' => 'cart',
        ],
        [
            'prefix' => 'ecommerce.checkout',
            'name' => 'Checkout',
            'key' => 'checkout',
        ],
        [
            'prefix' => 'ecommerce.shops',
            'name' => 'Shops',
            'key' => 'shops',
        ],
        [
            'prefix' => 'ecommerce.add.product',
            'name' => 'Add Product',
            'key' => 'add-product',
        ],
        [
            'prefix' => 'invoices.list',
            'name' => 'Invoice List',
            'key' => 'invoice-list',
        ],
        [
            'prefix' => 'invoices.detail',
            'name' => 'Invoice Detail',
            'key' => 'invoice-detail',
        ],
        [
            'prefix' => 'contacts.grid',
            'name' => 'User Grid',
            'key' => 'user-grid',
        ],
        [
            'prefix' => 'contacts.list',
            'name' => 'User List',
            'key' => 'user-list',
        ],
        [
            'prefix' => 'contacts.profile',
            'name' => 'Profile',
            'key' => 'user-profile',
        ],
        [
            'prefix' => 'layouts.horizontal',
            'name' => 'Horizontal',
            'key' => 'horizontal',
        ],
        [
            'prefix' => 'components.ui.alerts',
            'name' => 'Alerts',
            'key' => 'alerts',
        ],
        [
            'prefix' => 'components.ui.buttons',
            'name' => 'Buttons',
            'key' => 'buttons',
        ],
        [
            'prefix' => 'components.ui.cards',
            'name' => 'Cards',
            'key' => 'cards',
        ],
        [
            'prefix' => 'components.ui.carousel',
            'name' => 'Carousel',
            'key' => 'carousel',
        ],
        [
            'prefix' => 'components.ui.dropdowns',
            'name' => 'Dropdowns',
            'key' => 'dropdowns',
        ],
        [
            'prefix' => 'components.ui.grid',
            'name' => 'Grid',
            'key' => 'grid',
        ],
        [
            'prefix' => 'components.ui.images',
            'name' => 'Images',
            'key' => 'images',
        ],
        [
            'prefix' => 'components.ui.lightbox',
            'name' => 'Lightbox',
            'key' => 'lightbox',
        ],
        [
            'prefix' => 'components.ui.modals',
            'name' => 'Modals',
            'key' => 'modals',
        ],
        [
            'prefix' => 'components.ui.offcanvas',
            'name' => 'Offcanvas',
            'key' => 'offcanvas',
        ],
        [
            'prefix' => 'components.ui.rangeslider',
            'name' => 'Range Slider',
            'key' => 'range-slider',
        ],
        [
            'prefix' => 'components.ui.progressbars',
            'name' => 'Progress Bars',
            'key' => 'progress-bars',
        ],
        [
            'prefix' => 'components.ui.sweet.alert',
            'name' => 'Sweet Alert',
            'key' => 'sweet-alert',
        ],
        [
            'prefix' => 'components.ui.tabs.accordions',
            'name' => 'Tabs Accordions',
            'key' => 'tabs-accordions',
        ],
        [
            'prefix' => 'components.ui.typography',
            'name' => 'Typography',
            'key' => 'typography',
        ],
        [
            'prefix' => 'components.ui.video',
            'name' => 'Video',
            'key' => 'video',
        ],
        [
            'prefix' => 'components.ui.general',
            'name' => 'General',
            'key' => 'general',
        ],
        [
            'prefix' => 'components.ui.colors',
            'name' => 'Colors',
            'key' => 'colors',
        ],
        [
            'prefix' => 'components.ui.rating',
            'name' => 'Rating',
            'key' => 'rating',
        ],
        [
            'prefix' => 'components.ui.notifications',
            'name' => 'Notifications',
            'key' => 'notifications',
        ],
        [
            'prefix' => 'components.form.elements',
            'name' => 'Form Elements',
            'key' => 'form-elements',
        ],
        [
            'prefix' => 'components.form.layouts',
            'name' => 'Form Layouts',
            'key' => 'form-layouts',
        ],
        [
            'prefix' => 'components.form.validation',
            'name' => 'Form Validation',
            'key' => 'form-validation',
        ],
        [
            'prefix' => 'components.form.advanced',
            'name' => 'Form Advanced',
            'key' => 'form-advanced',
        ],
        [
            'prefix' => 'components.form.editors',
            'name' => 'Form Editors',
            'key' => 'form-editors',
        ],
        [
            'prefix' => 'components.form.uploads',
            'name' => 'Form File Upload',
            'key' => 'form-upload',
        ],
        [
            'prefix' => 'components.form.wizard',
            'name' => 'Form Wizard',
            'key' => 'form-wizard',
        ],
        [
            'prefix' => 'components.form.mask',
            'name' => 'Form Mask',
            'key' => 'form-mask',
        ],
        [
            'prefix' => 'components.table.basic',
            'name' => 'Basic Tables',
            'key' => 'basic-tables',
        ],
        [
            'prefix' => 'components.table.advanced',
            'name' => 'Advance Tables',
            'key' => 'advanced-tables',
        ],
        [
            'prefix' => 'components.chart.apex',
            'name' => 'Apex Charts',
            'key' => 'apex-charts',
        ],
        [
            'prefix' => 'components.chart.chartjs',
            'name' => 'Chartjs Charts',
            'key' => 'chartjs-charts',
        ],
        [
            'prefix' => 'components.chart.tui',
            'name' => 'Toast UI Charts',
            'key' => 'ui-charts',
        ],
        [
            'prefix' => 'components.icon.evaicons',
            'name' => 'Eva Icons',
            'key' => 'evaicons',
        ],
        [
            'prefix' => 'components.icon.boxicons',
            'name' => 'Boxicons',
            'key' => 'boxicons',
        ],
        [
            'prefix' => 'components.icon.materialdesign',
            'name' => 'Material Design',
            'key' => 'material-design',
        ],
        [
            'prefix' => 'components.icon.fontawesome',
            'name' => 'Font Awesome',
            'key' => 'font-awesome',
        ],
        [
            'prefix' => 'components.map.google',
            'name' => 'Google',
            'key' => 'google',
        ],
        [
            'prefix' => 'components.map.vector',
            'name' => 'Vector',
            'key' => 'vector',
        ],
        [
            'prefix' => 'components.map.leaflet',
            'name' => 'Leaflet',
            'key' => 'leaflet',
        ],
        [
            'prefix' => 'components.auth.login',
            'name' => 'Login',
            'key' => 'login',
        ],
        [
            'prefix' => 'components.auth.register',
            'name' => 'Register',
            'key' => 'register',
        ],
        [
            'prefix' => 'components.auth.recoverpw',
            'name' => 'Recover Password',
            'key' => 'recover-password',
        ],
        [
            'prefix' => 'components.auth.lock-screen',
            'name' => 'Lock Screen',
            'key' => 'lock-screen',
        ],
        [
            'prefix' => 'components.auth.logout',
            'name' => 'Logout',
            'key' => 'logout',
        ],
        [
            'prefix' => 'components.auth.confirm-mail',
            'name' => 'Confirm Mail',
            'key' => 'confirm-mail',
        ],
        [
            'prefix' => 'components.auth.email-verification',
            'name' => 'Email Verification',
            'key' => 'email-verification',
        ],
        [
            'prefix' => 'components.auth.two-step-verification',
            'name' => 'Two Step Verification',
            'key' => 'two-step-verification',
        ],
        [
            'prefix' => 'components.page.starter',
            'name' => 'Starter Page',
            'key' => 'starter-page',
        ],
        [
            'prefix' => 'components.page.maintenance',
            'name' => 'Maintenance',
            'key' => 'maintenance',
        ],
        [
            'prefix' => 'components.page.comingsoon',
            'name' => 'Coming Soon',
            'key' => 'coming-soon',
        ],
        [
            'prefix' => 'components.page.timeline',
            'name' => 'Timeline',
            'key' => 'timeline',
        ],
        [
            'prefix' => 'components.page.faqs',
            'name' => 'FAQs',
            'key' => 'faqs',
        ],
        [
            'prefix' => 'components.page.pricing',
            'name' => 'Pricing',
            'key' => 'pricing',
        ],
        [
            'prefix' => 'components.page.404',
            'name' => 'Error 404',
            'key' => 'error-404',
        ],
        [
            'prefix' => 'components.page.500',
            'name' => 'Error 500',
            'key' => 'error-500',
        ],
    ];



    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Module::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($this->routes as $route) {
            Module::create([
                'name' => $route['name'],
                'prefix' => $route['prefix'],
                'key' => $route['key'],
                'status' => 1,
            ]);
        }


    }
}
