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
                @php
                    $menus = session('menu');
                @endphp
                @if (isset($menus))
                    @if (!empty($menus))
                        @php
                            $items_without_menu = $menus['Sin_menu'];
                        @endphp
                        @foreach ($menus as $key => $access)
                            @if ($key != 'Sin_menu')
                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="bx {{ $access['icon_menu'] }} icon nav-icon"></i>
                                        <span class="menu-item"
                                            data-key="t-{{ $access['key_menu'] }}">{{ $key }}</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        @foreach ($access['submenus'] as $item => $prefix)
                                            <li><a href="{{ route($prefix['prefix_module']) }}"
                                                    data-key="t-{{ $prefix['key_module'] }}">{{ $item }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                        @foreach ($items_without_menu['submenus'] as $key => $access)
                            <li>
                                <a href="{{ route($access['prefix_module']) }}">
                                    <i class="bx bx bx-menu-alt-left icon nav-icon"></i>
                                    <span class="menu-item"
                                        data-key="t-{{ $prefix['key_module'] }}">{{ $key }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif

                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
