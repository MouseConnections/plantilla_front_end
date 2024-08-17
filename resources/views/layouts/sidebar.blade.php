<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard.ecommerce') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="{{ route('dashboard.ecommerce') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                {{-- DASHBOARD --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('dashboard.ecommerce') }}" data-key="t-ecommerce">Ecommerce</a></li>
                        <li><a href="{{ route('dashboard.sales') }}" data-key="t-sales">Sales</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Applications</li>

                {{-- EMAIL --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-envelope icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('email.inbox') }}" data-key="t-inbox">Inbox</a></li>
                        <li><a href="email-read" data-key="t-read-email">Read Email</a></li>
                    </ul>
                </li>

                {{-- CALENDAR --}}
                <li>
                    <a href="{{ route('calendar.index') }}">
                        <i class="bx bx-calendar-event icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Calendar</span>
                    </a>
                </li>

                {{-- APP TODO --}}
                <li>
                    <a href="{{ route('todo.index') }}">
                        <i class="bx bx-check-square icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Todo</span>
                    </a>
                </li>

                {{-- FILE MANAGER --}}
                <li>
                    <a href="{{ route('filemanager') }}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">File Manager</span>
                    </a>
                </li>

                {{-- CHAT --}}
                <li>
                    <a href="{{ route('chat.index') }}">
                        <i class="bx bx-chat icon nav-icon"></i>
                        <span class="menu-item" data-key="t-chat">Chat</span>
                        <span class="badge rounded-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                </li>

                {{-- E-COMMERCE --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-store icon nav-icon"></i>
                        <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('ecommerce.products') }}" data-key="t-products">Products</a></li>
                        <li><a href="{{ route('ecommerce.product.detail') }}" data-key="t-product-detail">Product
                                Detail</a></li>
                        <li><a href="{{ route('ecommerce.orders') }}" data-key="t-orders">Orders</a></li>
                        <li><a href="{{ route('ecommerce.customers') }}" data-key="t-customers">Customers</a></li>
                        <li><a href="{{ route('ecommerce.cart') }}" data-key="t-cart">Cart</a></li>
                        <li><a href="{{ route('ecommerce.checkout') }}" data-key="t-checkout">Checkout</a></li>
                        <li><a href="{{ route('ecommerce.shops') }}" data-key="t-shops">Shops</a></li>
                        <li><a href="{{ route('ecommerce.add.product') }}" data-key="t-add-product">Add Product</a>
                        </li>
                    </ul>
                </li>

                {{-- INVOICES --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-receipt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('invoices.list') }}" data-key="t-invoice-list">Invoice List</a></li>
                        <li><a href="{{ route('invoices.detail') }}" data-key="t-invoice-detail">Invoice Detail</a>
                        </li>
                    </ul>
                </li>

                {{-- CONTACTS --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contacts.grid') }}" data-key="t-user-grid">User Grid</a></li>
                        <li><a href="{{ route('contacts.list') }}" data-key="t-user-list">User List</a></li>
                        <li><a href="{{ route('contacts.profile') }}" data-key="t-user-profile">Profile</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-layouts">Layouts</li>

                {{-- HORIZONTAL --}}
                <li>
                    <a href="{{ route('layouts.horizontal') }}">
                        <i class="bx bx-layout icon nav-icon"></i>
                        <span class="menu-item" data-key="t-horizontal">Horizontal</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-components">Components</li>

                {{-- UI ELEMENTS --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-cube icon nav-icon"></i>
                        <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.ui.alerts') }}" data-key="t-alerts">Alerts</a></li>
                        <li><a href="{{ route('components.ui.buttons') }}" data-key="t-buttons">Buttons</a></li>
                        <li><a href="{{ route('components.ui.cards') }}" data-key="t-cards">Cards</a></li>
                        <li><a href="{{ route('components.ui.carousel') }}" data-key="t-carousel">Carousel</a></li>
                        <li><a href="{{ route('components.ui.dropdowns') }}" data-key="t-dropdowns">Dropdowns</a>
                        </li>
                        <li><a href="{{ route('components.ui.grid') }}" data-key="t-grid">Grid</a></li>
                        <li><a href="{{ route('components.ui.images') }}" data-key="t-images">Images</a></li>
                        <li><a href="{{ route('components.ui.lightbox') }}" data-key="t-lightbox">Lightbox</a></li>
                        <li><a href="{{ route('components.ui.modals') }}" data-key="t-modals">Modals</a></li>
                        <li><a href="{{ route('components.ui.offcanvas') }}" data-key="t-offcanvas">Offcanvas</a>
                        </li>
                        <li><a href="{{ route('components.ui.rangeslider') }}" data-key="t-range-slider">Range
                                Slider</a></li>
                        <li><a href="{{ route('components.ui.progressbars') }}" data-key="t-progress-bars">Progress
                                Bars</a></li>
                        <li><a href="{{ route('components.ui.sweet.alert') }}"
                                data-key="t-sweet-alert">Sweet-Alert</a></li>
                        <li><a href="{{ route('components.ui.tabs.accordions') }}" data-key="t-tabs-accordions">Tabs
                                & Accordions</a></li>
                        <li><a href="{{ route('components.ui.typography') }}" data-key="t-typography">Typography</a>
                        </li>
                        <li><a href="{{ route('components.ui.video') }}" data-key="t-video">Video</a></li>
                        <li><a href="{{ route('components.ui.general') }}" data-key="t-general">General</a></li>
                        <li><a href="{{ route('components.ui.colors') }}" data-key="t-colors">Colors</a></li>
                        <li><a href="{{ route('components.ui.rating') }}" data-key="t-rating">Rating</a></li>
                        <li><a href="{{ route('components.ui.notifications') }}"
                                data-key="t-notifications">Notifications</a></li>
                    </ul>
                </li>

                {{-- FORMS --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-layout icon nav-icon"></i>
                        <span class="menu-item" data-key="t-forms">Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.form.elements') }}" data-key="t-form-elements">Form
                                Elements</a></li>
                        <li><a href="{{ route('components.form.layouts') }}" data-key="t-form-layouts">Form
                                Layouts</a></li>
                        <li><a href="{{ route('components.form.validation') }}" data-key="t-form-validation">Form
                                Validation</a></li>
                        <li><a href="{{ route('components.form.advanced') }}" data-key="t-form-advanced">Form
                                Advanced</a></li>
                        <li><a href="{{ route('components.form.editors') }}" data-key="t-form-editors">Form
                                Editors</a></li>
                        <li><a href="{{ route('components.form.uploads') }}" data-key="t-form-upload">Form File
                                Upload</a></li>
                        <li><a href="{{ route('components.form.wizard') }}" data-key="t-form-wizard">Form Wizard</a>
                        </li>
                        <li><a href="{{ route('components.form.mask') }}" data-key="t-form-mask">Form Mask</a></li>
                    </ul>
                </li>

                {{-- TABLES --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-table icon nav-icon"></i>
                        <span class="menu-item" data-key="t-tables">Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.table.basic') }}" data-key="t-basic-tables">Basic
                                Tables</a></li>
                        <li><a href="{{ route('components.table.advanced') }}" data-key="t-advanced-tables">Advance
                                Tables</a></li>
                    </ul>
                </li>

                {{-- CHARTS --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-pie-chart-alt-2 icon nav-icon"></i>
                        <span class="menu-item" data-key="t-charts">Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.chart.apex') }}" data-key="t-apex-charts">Apex Charts</a>
                        </li>
                        <li><a href="{{ route('components.chart.chartjs') }}" data-key="t-chartjs-charts">Chartjs
                                Charts</a></li>
                        <li><a href="{{ route('components.chart.tui') }}" data-key="t-ui-charts">Toast UI Charts</a>
                        </li>
                    </ul>
                </li>

                {{-- ICONS --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-cuboid icon nav-icon"></i>
                        <span class="menu-item" data-key="t-icons">Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.icon.evaicons') }}" data-key="t-evaicons">Eva Icons</a>
                        </li>
                        <li><a href="{{ route('components.icon.boxicons') }}" data-key="t-boxicons">Boxicons</a></li>
                        <li><a href="{{ route('components.icon.materialdesign') }}"
                                data-key="t-material-design">Material Design</a></li>
                        <li><a href="{{ route('components.icon.fontawesome') }}" data-key="t-font-awesome">Font
                                Awesome 5</a></li>
                    </ul>
                </li>

                {{-- MAPS --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-map-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-maps">Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.map.google') }}" data-key="t-google">Google</a></li>
                        <li><a href="{{ route('components.map.vector') }}" data-key="t-vector">Vector</a></li>
                        <li><a href="{{ route('components.map.leaflet') }}" data-key="t-leaflet">Leaflet</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-pages">Pages</li>

                {{-- AUTHENTICATION --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-user-pin icon nav-icon"></i>
                        <span class="menu-item" data-key="t-authentication">Authentication</span>
                        <span class="badge rounded-pill bg-info">8</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.auth.login') }}" data-key="t-login">Login</a></li>
                        <li><a href="{{ route('components.auth.register') }}" data-key="t-register">Register</a></li>
                        <li><a href="{{ route('components.auth.recoverpw') }}" data-key="t-recover-password">Recover
                                Password</a></li>
                        <li><a href="{{ route('components.auth.lock-screen') }}" data-key="t-lock-screen">Lock
                                Screen</a></li>
                        <li><a href="{{ route('components.auth.logout') }}" data-key="t-logout">Logout</a></li>
                        <li><a href="{{ route('components.auth.confirm-mail') }}" data-key="t-confirm-mail">Confirm
                                Mail</a></li>
                        <li><a href="{{ route('components.auth.email-verification') }}"
                                data-key="t-email-verification">Email Verification</a></li>
                        <li><a href="{{ route('components.auth.two-step-verification') }}"
                                data-key="t-two-step-verification">Two Step Verification</a></li>
                    </ul>
                </li>

                {{-- UTILITY --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('components.page.starter') }}" data-key="t-starter-page">Starter Page</a></li>
                        <li><a href="{{ route('components.page.maintenance') }}" data-key="t-maintenance">Maintenance</a></li>
                        <li><a href="{{ route('components.page.comingsoon') }}" data-key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="{{ route('components.page.timeline') }}" data-key="t-timeline">Timeline</a></li>
                        <li><a href="{{ route('components.page.faqs') }}" data-key="t-faqs">FAQs</a></li>
                        <li><a href="{{ route('components.page.pricing') }}" data-key="t-pricing">Pricing</a></li>
                        <li><a href="{{ route('components.page.404') }}" data-key="t-error-404">Error 404</a></li>
                        <li><a href="{{ route('components.page.500') }}" data-key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                {{-- MULTI-LEVELS --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li class="disabled"><a href="#" data-key="t-disabled-item">Disabled Item</a></li>
                        <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
