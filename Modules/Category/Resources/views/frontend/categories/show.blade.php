@extends('front.layouts.app')

@section('title')
    {{ $$module_name_singular->name }} - {{ __($module_title) }}
@endsection

@section('content')
    <x-frontend.header-block :title="__($$module_name_singular->name)">
        <x-slot:sub_title>
            <p class="mb-8 leading-relaxed">
                <a class="mr-2 rounded bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-800 outline outline-1 outline-gray-800 hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600"
                    href="{{ route('frontend.' . $module_name . '.index') }}">
                    {{ __($module_title) }}
                </a>
            </p>
        </x-slot>

        <p class="mb-8 leading-relaxed">
            {{ $$module_name_singular->description }}
        </p>
    </x-frontend.header-block>

    <section id="agent-p-2" class="property-details bg_light padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div id="property-2-slider" class="owl-carousel">
                            @foreach ($properties as $property)
                                @php
                                    $property_route = route('frontend.property.show', [$property->id, $property->slug]);
                                @endphp
                                <div class="item">
                                    <div class="property_item bottom40">
                                        <div class="image">
                                            <img src="{{ $property->image }}" alt="{{ $property->name }}"
                                                class="img-responsive">
                                            <div class="property_meta">
                                                <span><i class="fa fa-object-group"></i>{{ $property->size }} sq ft </span>
                                                <span><i class="fa fa-bed"></i>{{ $property->bedrooms }}</span>
                                                <span><i class="fa fa-bath"></i>{{ $property->bathrooms }} Bathroom</span>
                                            </div>
                                            <div class="price">
                                                <span class="tag">{{ $property->status }}</span>
                                            </div>
                                            <div class="overlay">
                                                <div class="centered">
                                                    <a class="link_arrow white_border" href="{{ $property_route }}">View
                                                        Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="proerty_content">
                                            <div class="proerty_text">
                                                <h3><a href="{{ $property_route }}">{{ $property->name }}</a>
                                                </h3>
                                                <span class="bottom10">{{ $property->location->name }}</span>
                                                <p><strong>₹{{ number_format($property->price, 2) }}</strong></p>
                                            </div>
                                            <div class="favroute clearfix">
                                                <p class="pull-left"><i class="icon-calendar2"></i>
                                                    {{ $property->created_at->diffForHumans() }}</p>
                                                <ul class="pull-right">
                                                    <li><a href="#."><i class="icon-video"></i></a></li>
                                                    <li><a href="#."><i class="icon-like"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
