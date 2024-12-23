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
                    'icon' => 'fa-solid fa-cubes',
                    'url' => route('backend.dashboard'),
                ],
                [
                    'name' => 'notifications',
                    'text' => __('Notifications'),
                    'icon' => 'fa-regular fa-bell',
                    'url' => route('backend.notifications.index'),
                ],
                [
                    'group' => 'Property',
                    'icon' => 'fa-regular fa-file-lines',
                    'items' => [
                        ['name' => 'properties', 'text' => __('Property'), 'permission' => 'view_posts'],
                        ['name' => 'categories', 'text' => __('Categories'), 'permission' => 'view_categories'],
                        ['name' => 'locations', 'text' => __('Locations'), 'permission' => 'view_locations'],
                    ],
                ],
                [
                    'group' => 'blogs',
                    'icon' => 'fa-regular fa-file-lines',
                    'items' => [
                        ['name' => 'posts', 'text' => __('Blogs'), 'permission' => 'view_posts'],
                        ['name' => 'tags', 'text' => __('Tags'), 'permission' => 'view_tags'],
                    ],
                ],
                [
                    'name' => 'queries',
                    'text' => __('Query'),
                    'icon' => 'fa-solid fa-gears',
                ],
                [
                    'name' => 'contact',
                    'text' => __('Contact'),
                    'icon' => 'fa-solid fa-gears',
                ],
                [
                    'name' => 'settings',
                    'text' => __('Settings'),
                    'icon' => 'fa-solid fa-gears',
                    'permission' => 'edit_settings',
                ],
                [
                    'name' => 'backups',
                    'text' => __('Backups'),
                    'icon' => 'fa-solid fa-box-archive',
                    'permission' => 'view_backups',
                ],
                [
                    'name' => 'users',
                    'text' => __('Users'),
                    'icon' => 'fa-solid fa-user-group',
                    'permission' => 'view_users',
                ],
                [
                    'name' => 'roles',
                    'text' => __('Roles'),
                    'icon' => 'fa-solid fa-user-shield',
                    'permission' => 'view_roles',
                ],

                [
                    'group' => 'logs',
                    'icon' => 'fa-solid fa-list-ul',
                    'items' => [
                        ['route' => 'log-viewer::dashboard', 'text' => 'Log Dashboard', 'permission' => 'view_logs'],
                        ['route' => 'log-viewer::logs.list', 'text' => 'Daily Log', 'permission' => 'view_logs'],
                    ],
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
                            @can($item['permission'])
                                <li class="nav-item">
                                    <a href="{{ isset($item['route']) ? route($item['route']) : route('backend.' . $item['name'] . '.index') }}"
                                        class="nav-link">
                                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                        &nbsp; {{ $item['text'] }}
                                    </a>
                                </li>
                            @endcan
                        @endforeach
                    </ul>
                </li>
            @else
                <x-backend.sidebar-nav-item :permission="$module['permission'] ?? null" :url="$module['url'] ?? route('backend.' . $module['name'] . '.index')" :icon="$module['icon']" :text="$module['text']" />
            @endif
        @endforeach
    </ul>


    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" data-coreui-toggle="unfoldable" type="button"></button>
    </div>
</div>
