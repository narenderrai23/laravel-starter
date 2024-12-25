<?php
$notifications = optional(auth()->user())->unreadNotifications;
$notifications_count = optional($notifications)->count();
$notifications_latest = optional($notifications)->take(5);
?>

<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand d-sm-flex justify-content-center">
            <a href="{{ route('backend.dashboard') }}">
                <img class="sidebar-brand-full" src="{{ asset('img/logo-with-text.jpg') }}" alt="{{ app_name() }}"
                    height="46" />
                <img class="sidebar-brand-narrow" src="{{ asset('img/logo-square.jpg') }}" alt="{{ app_name() }}"
                    height="46" />
            </a>
        </div>
        <button class="btn-close d-lg-none" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" type="button"
            aria-label="Close"
            onclick='coreui.Sidebar.getInstance(document.querySelector("#sidebar")).toggle()'></button>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        @php
            $modules = [
                [
                    'name' => 'dashboard',
                    'text' => __('Dashboard'),
                    'icon' => 'fa-solid fa-chart-line', // Updated icon
                    'url' => route('backend.dashboard'),
                ],
                [
                    'group' => 'Property',
                    'icon' => 'fa-solid fa-building', // Updated icon
                    'items' => [
                        ['name' => 'properties', 'text' => __('Property')],
                        ['name' => 'categories', 'text' => __('Categories')],
                        ['name' => 'locations', 'text' => __('Locations')],
                    ],
                ],
                [
                    'group' => 'blogs',
                    'icon' => 'fa-solid fa-newspaper', // Updated icon
                    'items' => [['name' => 'posts', 'text' => __('Blogs')], ['name' => 'tags', 'text' => __('Tags')]],
                ],
                [
                    'group' => 'Query',
                    'icon' => 'fa-solid fa-question-circle', // Updated icon
                    'items' => [['name' => 'queries', 'text' => __('Query')], ['name' => 'contact', 'text' => __('Contact')]],
                ],
                [
                    'name' => 'settings',
                    'text' => __('Settings'),
                    'icon' => 'fa-solid fa-cogs', // Updated icon
                ],
                [
                    'name' => 'backups',
                    'text' => __('Backups'),
                    'icon' => 'fa-solid fa-database', // Updated icon
                ],
                [
                    'name' => 'users',
                    'text' => __('Users'),
                    'icon' => 'fa-solid fa-user', // Updated icon
                ],
            ];
        @endphp


        @foreach ($modules as $module)
            @if (isset($module['group']))
                <li class="nav-group" aria-expanded="true">
                    <a class="nav-link nav-group-toggle" href="#">
                        <i class="nav-icon {{ $module['icon'] }}"></i>&nbsp; @lang(ucfirst($module['group']))
                    </a>
                    <ul class="nav-group-items compact">
                        @foreach ($module['items'] as $item)
                            <li class="nav-item">
                                <a href="{{ isset($item['route']) ? route($item['route']) : route('backend.' . $item['name'] . '.index') }}"
                                    class="nav-link">
                                    <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                    &nbsp; {{ $item['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <x-backend.sidebar-nav-item :url="$module['url'] ?? route('backend.' . $module['name'] . '.index')" :icon="$module['icon']" :text="$module['text']" />
            @endif
        @endforeach
    </ul>


    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" data-coreui-toggle="unfoldable" type="button"></button>
    </div>
</div>
