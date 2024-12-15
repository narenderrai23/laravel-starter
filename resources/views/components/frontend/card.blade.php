@props([
    'url' => null,
    'name',
    'image' => '',
])

<div class="col-sm-4 col-xs-12 margin-bottom-20">
    <div class="sim-lar-p">
        @if ($image)
            <div class="image"><img src="{{ $image }}" alt="{{ $name }}"></div>
        @endif
        <div class="sim-lar-text">
            <h3> {{ $name }}</h3>
            <p>{!! $slot !!}</p>
            @if ($url)
                <a href="{{ $url }}" class="link_arrow top20">Read More</a>
            @endif
        </div>
    </div>
</div>
