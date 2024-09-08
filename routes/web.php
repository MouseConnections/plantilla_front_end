<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('index');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/')->group(function () {
        Route::prefix('dashboard/')->group(function () {
            Route::get('ecommerce', function () {
                return view('index');
            })->name('dashboard.ecommerce')->middleware('role:dashboard.ecommerce');

            Route::get('sales', function () {
                return view('dashboard-sales');
            })->name('dashboard.sales')->middleware('role:dashboard.sales');
        });

        Route::prefix('dashboard/')->group(function () {

            Route::get('ecommerce', function () {
                return view('index');
            })->name('dashboard.ecommerce')->middleware('role:dashboard.ecommerce');

            Route::get('sales', function () {
                return view('dashboard-sales');
            })->name('dashboard.sales')->middleware('role:dashboard.sales');
        });

        Route::get('calendar', function () {
            return view('apps-calendar');
        })->name('calendar.index')->middleware('role:calendar.index');

        Route::get('app_todo', function () {
            return view('apps-todo');
        })->name('todo.index')->middleware('role:todo.index');

        Route::get('app_chat', function () {
            return view('apps-chat');
        })->name('chat.index')->middleware('role:chat.index');

        Route::prefix('ecommerce/')->group(function () {
            Route::get('products', function () {
                return view('ecommerce-products');
            })->name('ecommerce.products')->middleware('role:ecommerce.products');

            Route::get('product-detail', function () {
                return view('ecommerce-product-detail');
            })->name('ecommerce.product.detail')->middleware('role:ecommerce.product.detail');

            Route::get('orders', function () {
                return view('ecommerce-orders');
            })->name('ecommerce.orders')->middleware('role:ecommerce.orders');

            Route::get('customers', function () {
                return view('ecommerce-customers');
            })->name('ecommerce.customers')->middleware('role:ecommerce.customers');

            Route::get('cart', function () {
                return view('ecommerce-cart');
            })->name('ecommerce.cart')->middleware('role:ecommerce.cart');

            Route::get('checkout', function () {
                return view('ecommerce-checkout');
            })->name('ecommerce.checkout')->middleware('role:ecommerce.checkout');

            Route::get('shops', function () {
                return view('ecommerce-shops');
            })->name('ecommerce.shops')->middleware('role:ecommerce.shops');

            Route::get('add-product', function () {
                return view('ecommerce-add-product');
            })->name('ecommerce.add.product')->middleware('role:ecommerce.add.product');
        });

        Route::prefix('invoices/')->group(function () {
            Route::get('list', function () {
                return view('invoices-list');
            })->name('invoices.list')->middleware('role:invoices.list');

            Route::get('detail', function () {
                return view('invoices-detail');
            })->name('invoices.detail')->middleware('role:invoices.detail');
        });

        Route::prefix('contacts/')->group(function () {
            Route::get('grid', function () {
                return view('contacts-grid');
            })->name('contacts.grid')->middleware('role:contacts.grid');

            Route::get('list', function () {
                return view('contacts-list');
            })->name('contacts.list')->middleware('role:contacts.list');

            Route::get('profile', function () {
                return view('contacts-profile');
            })->name('contacts.profile')->middleware('role:contacts.profile');
        });
    });
});
Route::middleware(['auth'])->group(function () {

    Route::prefix('email/')->group(function () {
        Route::get('', [App\Http\Controllers\HomeController::class, 'emailIndex'])
            ->name('email.inbox')
            ->middleware('role:email.inbox');
        Route::get('read', [App\Http\Controllers\HomeController::class, 'emailRead'])
            ->name('email.read')
            ->middleware('role:email.read');
    });

    Route::get('/file-manager', [App\Http\Controllers\HomeController::class, 'fileManager'])
        ->name('filemanager')
        ->middleware('role:filemanager');
});




Route::middleware(['auth'])->group(function () {
    Route::prefix('components/')->group(function () {
        // LAYOUT HORIZONTAL
        Route::get('layouts-horizontal', function () {
            return view('layouts-horizontal');
        })->name('layouts.horizontal')->middleware('role:layouts.horizontal');

        // ELEMENTS
        Route::prefix('ui-elements/')->group(function () {
            Route::get('alerts', function () {
                return view('ui-alerts');
            })->name('components.ui.alerts')->middleware('role:components.ui.alerts');

            Route::get('buttons', function () {
                return view('ui-buttons');
            })->name('components.ui.buttons')->middleware('role:components.ui.buttons');

            Route::get('cards', function () {
                return view('ui-cards');
            })->name('components.ui.cards')->middleware('role:components.ui.cards');

            Route::get('carousel', function () {
                return view('ui-carousel');
            })->name('components.ui.carousel')->middleware('role:components.ui.carousel');

            Route::get('dropdowns', function () {
                return view('ui-dropdowns');
            })->name('components.ui.dropdowns')->middleware('role:components.ui.dropdowns');

            Route::get('grid', function () {
                return view('ui-grid');
            })->name('components.ui.grid')->middleware('role:components.ui.grid');

            Route::get('images', function () {
                return view('ui-images');
            })->name('components.ui.images')->middleware('role:components.ui.images');

            Route::get('lightbox', function () {
                return view('ui-lightbox');
            })->name('components.ui.lightbox')->middleware('role:components.ui.lightbox');

            Route::get('modals', function () {
                return view('ui-modals');
            })->name('components.ui.modals')->middleware('role:components.ui.modals');

            Route::get('offcanvas', function () {
                return view('ui-offcanvas');
            })->name('components.ui.offcanvas')->middleware('role:components.ui.offcanvas');

            Route::get('rangeslider', function () {
                return view('ui-rangeslider');
            })->name('components.ui.rangeslider')->middleware('role:components.ui.rangeslider');

            Route::get('progressbars', function () {
                return view('ui-progressbars');
            })->name('components.ui.progressbars')->middleware('role:components.ui.progressbars');

            Route::get('sweet-alert', function () {
                return view('ui-sweet-alert');
            })->name('components.ui.sweet.alert')->middleware('role:components.ui.sweet.alert');

            Route::get('tabs-accordions', function () {
                return view('ui-tabs-accordions');
            })->name('components.ui.tabs.accordions')->middleware('role:components.ui.tabs.accordions');

            Route::get('typography', function () {
                return view('ui-typography');
            })->name('components.ui.typography')->middleware('role:components.ui.typography');

            Route::get('video', function () {
                return view('ui-video');
            })->name('components.ui.video')->middleware('role:components.ui.video');

            Route::get('general', function () {
                return view('ui-general');
            })->name('components.ui.general')->middleware('role:components.ui.general');

            Route::get('colors', function () {
                return view('ui-colors');
            })->name('components.ui.colors')->middleware('role:components.ui.colors');

            Route::get('rating', function () {
                return view('ui-rating');
            })->name('components.ui.rating')->middleware('role:components.ui.rating');

            Route::get('notifications', function () {
                return view('ui-notifications');
            })->name('components.ui.notifications')->middleware('role:components.ui.notifications');
        });


        // FORMS
        Route::prefix('forms/')->group(function () {
            Route::get('elements', function () {
                return view('form-elements');
            })->name('components.form.elements')->middleware('role:components.form.elements');
            Route::get('layouts', function () {
                return view('form-layouts');
            })->name('components.form.layouts')->middleware('role:components.form.layouts');
            Route::get('validation', function () {
                return view('form-validation');
            })->name('components.form.validation')->middleware('role:components.form.validation');
            Route::get('advanced', function () {
                return view('form-advanced');
            })->name('components.form.advanced')->middleware('role:components.form.advanced');
            Route::get('editors', function () {
                return view('form-editors');
            })->name('components.form.editors')->middleware('role:components.form.editors');
            Route::get('uploads', function () {
                return view('form-uploads');
            })->name('components.form.uploads')->middleware('role:components.form.uploads');
            Route::get('wizard', function () {
                return view('form-wizard');
            })->name('components.form.wizard')->middleware('role:components.form.wizard');
            Route::get('mask', function () {
                return view('form-mask');
            })->name('components.form.mask')->middleware('role:components.form.mask');
        });

        // TABLES
        Route::prefix('tables/')->group(function () {
            Route::get('basic', function () {
                return view('tables-basic');
            })->name('components.table.basic')->middleware('role:components.table.basic');
            Route::get('advanced', function () {
                return view('tables-advanced');
            })->name('components.table.advanced')->middleware('role:components.table.advanced');
        });

        // CHARTS
        Route::prefix('charts/')->group(function () {
            Route::get('apex', function () {
                return view('charts-apex');
            })->name('components.chart.apex')->middleware('role:components.chart.apex');
            Route::get('chartjs', function () {
                return view('charts-chartjs');
            })->name('components.chart.chartjs')->middleware('role:components.chart.chartjs');
            Route::get('tui', function () {
                return view('charts-tui');
            })->name('components.chart.tui')->middleware('role:components.chart.tui');
        });

        // ICONS
        Route::prefix('icons/')->group(function () {
            Route::get('evaicons', function () {
                return view('icons-evaicons');
            })->name('components.icon.evaicons')->middleware('role:components.icon.evaicons');
            Route::get('boxicons', function () {
                return view('icons-boxicons');
            })->name('components.icon.boxicons')->middleware('role:components.icon.boxicons');
            Route::get('materialdesign', function () {
                return view('icons-materialdesign');
            })->name('components.icon.materialdesign')->middleware('role:components.icon.materialdesign');
            Route::get('fontawesome', function () {
                return view('icons-fontawesome');
            })->name('components.icon.fontawesome')->middleware('role:components.icon.fontawesome');
        });

        // MAPS
        Route::prefix('maps/')->group(function () {
            Route::get('google', function () {
                return view('maps-google');
            })->name('components.map.google')->middleware('role:components.map.google');
            Route::get('vector', function () {
                return view('maps-vector');
            })->name('components.map.vector')->middleware('role:components.map.vector');
            Route::get('leaflet', function () {
                return view('maps-leaflet');
            })->name('components.map.leaflet')->middleware('role:components.map.leaflet');
        });

        // AUTHENTICATION
        Route::prefix('auth/')->group(function () {
            Route::get('login', function () {
                return view('auth-login');
            })->name('components.auth.login');
            Route::get('register', function () {
                return view('auth-register');
            })->name('components.auth.register');
            Route::get('recoverpw', function () {
                return view('auth-recoverpw');
            })->name('components.auth.recoverpw');
            Route::get('lock-screen', function () {
                return view('auth-lock-screen');
            })->name('components.auth.lock-screen');
            Route::get('logout', function () {
                return view('auth-logout');
            })->name('components.auth.logout');
            Route::get('confirm-mail', function () {
                return view('auth-confirm-mail');
            })->name('components.auth.confirm-mail');
            Route::get('email-verification', function () {
                return view('auth-email-verification');
            })->name('components.auth.email-verification');
            Route::get('two-step-verification', function () {
                return view('auth-two-step-verification');
            })->name('components.auth.two-step-verification');
        });

        // UTILITY
        Route::prefix('pages/')->group(function () {
            Route::get('starter', function () {
                return view('pages-starter');
            })->name('components.page.starter')->middleware('role:components.page.starter');
            Route::get('maintenance', function () {
                return view('pages-maintenance');
            })->name('components.page.maintenance')->middleware('role:components.page.maintenance');
            Route::get('comingsoon', function () {
                return view('pages-comingsoon');
            })->name('components.page.comingsoon')->middleware('role:components.page.comingsoon');
            Route::get('timeline', function () {
                return view('pages-timeline');
            })->name('components.page.timeline')->middleware('role:components.page.timeline');
            Route::get('faqs', function () {
                return view('pages-faqs');
            })->name('components.page.faqs')->middleware('role:components.page.faqs');
            Route::get('pricing', function () {
                return view('pages-pricing');
            })->name('components.page.pricing')->middleware('role:components.page.pricing');
            Route::get('404', function () {
                return view('pages-404');
            })->name('components.page.404');
            Route::get('500', function () {
                return view('pages-500');
            })->name('components.page.500');
        });
    });
});






// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
