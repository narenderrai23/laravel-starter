@props([
    "url" => "",
    "text",
])

<span class="m-1 d-inline-flex text-break">
    @if ($url)
        <a
            class="mb-1 me-1 btn btn-default btn-sm"
            href="{{ $url }}"
        >
            {{ $text }}
        </a>
    @else
        <span
            class="mb-1 me-1 btn btn-default btn-sm"
        >
            {{ $text }}
        </span>
    @endif
</span>
