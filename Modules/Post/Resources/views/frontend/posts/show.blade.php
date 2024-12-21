@extends('front.layouts.app')

@section('title')
    {{ $$module_name_singular->name }}
@endsection

@section('content')
    <div class="page-title page-main-section parallaxie">
        <div class="container padding-bottom-top-120 text-uppercase text-center">
            <div class="main-title">
                <h1>{{ $$module_name_singular->name }}</h1>
                <h5>10 Years Of Experience!</h5>
                <div class="line_4"></div>
                <div class="line_5"></div>
                <div class="line_6"></div>
                <a href="/">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                <a href="news-details.html">Blog Details</a>
            </div>
        </div>
    </div>

    <section id="news-section-1" class="news-section-details property-details padding_top">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-md-8 mb-4 mb-md-0">
                    <div class="pb-4">
                        <p>{!! $$module_name_singular->content !!}</p>
                    </div>
                    <hr />
                    <!-- Author and Publish Info -->
                    <div class="mb-20 d-md-flex justify-content-between">
                        <div>
                            {{ __('Written by') }}:
                            {{ isset($$module_name_singular->created_by_alias) ? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name }}
                        </div>
                        <div>
                            {{ __('Published at') }}: {{ $$module_name_singular->published_at }}
                        </div>
                    </div>
                    <!-- Category Section -->
                    <div class="mb-20">
                        <span class="fw-bold">@lang('Category'):</span>
                        <x-frontend.badge :url="route('frontend.categories.show', [
                            ($$module_name_singular->category_id),
                            $$module_name_singular->category->slug,
                        ])" :text="$$module_name_singular->category_name" />
                    </div>
                    <!-- Tags Section -->
                    @if (count($$module_name_singular->tags))
                        <div class="mb-20">
                            <span class="fw-bold">@lang('Tags'):</span>
                            @foreach ($$module_name_singular->tags as $tag)
                                <x-frontend.badge :url="route('frontend.tags.show', [($tag->id), $tag->slug])" :text="$tag->name" />
                            @endforeach
                        </div>
                    @endif
                    <!-- Share Section -->
                    <div class="mb-20 d-flex justify-content-between align-items-center">
                        <h6>Share with others</h6>
                        <div>
                            @php $title_text = $$module_name_singular->name; @endphp
                            <!-- Twitter Button -->
                            <button class="btn btn-outline-secondary m-1" data-sharer="twitter" data-via="muktolibrary"
                                data-title="{{ $title_text }}" data-hashtags="muktolibrary"
                                data-url="{{ url()->full() }}">
                                <i class="bi bi-twitter"></i> Twitter
                            </button>
                            <!-- Facebook Button -->
                            <button class="btn btn-outline-secondary m-1" data-sharer="facebook" data-hashtag="muktolibrary"
                                data-url="{{ url()->full() }}">
                                <i class="bi bi-facebook"></i> Facebook
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <livewire:recent-posts />
                </div>
            </div>
        </div>
    </section>

@endsection

@push('after-style')
@endpush

@push('after-scripts')
    <script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush
