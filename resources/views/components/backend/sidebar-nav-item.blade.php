@props(['url' => '/', 'icon' => 'fa-solid fa-cube', 'text' => 'Menu'])

<li class="nav-item">
    <a class="nav-link" href="{{ $url }}">
        <i class="nav-icon {{ $icon }}"></i>
        &nbsp;{{ $text }}
    </a>
</li>
