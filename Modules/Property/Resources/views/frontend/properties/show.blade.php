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
    <!-- PROPERTY DETAILS-->
    <section id="news-section-1" class="property-details padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase">{{ $property->name }}</h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                    <p class="bottom20">{{ $property->address ?? 'Address not available' }}</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="property-d-1" class="owl-carousel">
                                @foreach ($property->images()->get() as $image)
                                    <div class="item"><img src="{{ asset('storage/' . $image->image) }}" alt="image" />
                                    </div>
                                @endforeach
                            </div>
                            <div id="property-d-1-2" class="owl-carousel">
                                @foreach ($property->images()->get() as $image)
                                    <div class="item"><img src="{{ asset('storage/' . $image->image) }}" alt="image" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row top40">
                        <div class="col-md-8">
                            <div class="row margin_bottom">
                                <div class="col-xs-12 top40">
                                    <h3 class="text-uppercase bottom30">Property <span class="color_red">Description</span>
                                    </h3>
                                    <p class="bottom30">{{ $property->description }}</p>
                                    <p class="bottom30">{{ $property->additional_info }}</p>
                                    <div class="property_meta top10">
                                        <span><i class="fa fa-object-group"></i>{{ $property->size }} sq ft</span>
                                        <span><i class="fa fa-bath"></i>{{ $property->bathrooms }} Bathrooms</span>
                                        <span><i class="fa fa-car"></i>{{ $property->garage }} Garage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin_bottom">
                                <div class="col-xs-12">
                                    <h3 class="text-uppercase bottom30">Quick <span class="color_red">Summary</span></h3>
                                </div>
                                <div class="property-d-table clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td><b>Property ID</b></td>
                                                    <td class="text-right">{{ $property->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Price</b></td>
                                                    <td class="text-right">${{ number_format($property->price, 2) }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Property Size</b></td>
                                                    <td class="text-right">{{ $property->size }} ft<sup>2</sup></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Bedrooms</b></td>
                                                    <td class="text-right">{{ $property->bedrooms }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Available From</b></td>
                                                    <td class="text-right">{{ $property->available_from }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td><b>Status</b></td>
                                                    <td class="text-right">{{ ucfirst($property->status) }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Year Built</b></td>
                                                    <td class="text-right">{{ $property->year_built }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Garages</b></td>
                                                    <td class="text-right">{{ $property->garage }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Cross Streets</b></td>
                                                    <td class="text-right">{{ $property->cross_streets }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Floors</b></td>
                                                    <td class="text-right">{{ $property->floors }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Plumbing</b></td>
                                                    <td class="text-right">{{ $property->plumbing }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin_bottom">
                                <div class="col-xs-12">
                                    <h3 class="text-uppercase bottom20">Our <span class="color_red">Plans</span></h3>
                                </div>
                                {{-- @if ($property->plans)
                                    @foreach ($property->plans as $plan)
                                        <div class="col-md-4 col-sm-4 col-xs-12 top10">
                                            <div class="image">
                                                <img src="{{ asset('storage/' . $plan->image_path) }}" alt="image" />
                                                <div class="overlay border_radius">
                                                    <a class="fancybox centered"
                                                        href="{{ asset('storage/' . $plan->image_path) }}"
                                                        data-fancybox-group="gallery">
                                                        <i class="icon-focus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif --}}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <livewire:recent-property />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
