<?php
$notifications = optional(auth()->user())->unreadNotifications;
$notifications_count = optional($notifications)->count();
$notifications_latest = optional($notifications)->take(5);
?>

<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand d-sm-flex justify-content-center">
            <a href="/">
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
            ];
        @endphp

        @foreach ($modules as $module)
            @isset($module['permission'])
                <x-backend.sidebar-nav-item :permission="$module['permission']" :url="route('backend.' . $module['name'] . '.index')" :icon="$module['icon']" :text="$module['text']" />
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ $module['url'] }}">
                        <i class="nav-icon {{ $module['icon'] }}"></i>
                        &nbsp; {{ $module['text'] }}
                    </a>
                </li>
            @endisset
        @endforeach

        @php
            $modules = [
                'blogs' => [
                    ['name' => 'posts', 'text' => __('Blogs'), 'permission' => 'view_posts'],
                    ['name' => 'categories', 'text' => __('Categories'), 'permission' => 'view_categories'],
                    ['name' => 'tags', 'text' => __('Tags'), 'permission' => 'view_tags'],
                ],
                'logs' => [
                    ['route' => 'log-viewer::dashboard', 'text' => 'Log Dashboard', 'permission' => 'view_logs'],
                    ['route' => 'log-viewer::logs.list', 'text' => 'Daily Log', 'permission' => 'view_logs'],
                ],
            ];
        @endphp

        @foreach (['blogs', 'logs'] as $key)
            @if ($key === 'blogs' || auth()->user()->can('view_logs'))
                <li class="nav-group" aria-expanded="true">
                    <a class="nav-link nav-group-toggle" href="#">
                        <i
                            class="nav-icon {{ $key === 'blogs' ? 'fa-regular fa-file-lines' : 'fa-solid fa-list-ul' }}"></i>
                        &nbsp; @lang(ucfirst($key))
                    </a>
                    <ul class="nav-group-items compact" style="height: auto">
                        @foreach ($modules[$key] as $item)
                            @can($item['permission'])
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ $key === 'blogs' ? route('backend.' . $item['name'] . '.index') : route($item['route']) }}">
                                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                        &nbsp; {{ $item['text'] }}
                                    </a>
                                </li>
                            @endcan
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach

    </ul>

    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" data-coreui-toggle="unfoldable" type="button"></button>
    </div>
</div>
