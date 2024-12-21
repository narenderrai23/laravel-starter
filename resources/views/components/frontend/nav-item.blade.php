@props([
    'href' => url('/'),
    'target' => '_self',
    'active' => false, // Active state
    'submenu' => [], // Array of submenu items
    'dropdown' => false, // Is a dropdown?
])

<li class="nav-item {{ $dropdown ? 'dropdown' : '' }} {{ $active ? 'active' : '' }}">
    <a href="{{ $href }}"
       class="nav-link {{ $dropdown ? 'dropdown-toggle' : '' }}"
       @if ($dropdown) data-toggle="dropdown" role="button" aria-expanded="false" @endif>
        {{ $slot }}
    </a>

    @if ($dropdown && !empty($submenu))
        <ul class="dropdown-menu">
            @foreach ($submenu as $item)
                <li class="{{ $item['active'] ? 'active' : '' }}">
                    <a class="dropdown-item" href="{{ $item['href'] }}">
                        {{ $item['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
