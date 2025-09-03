@extends('front.layouts.app')

@section('content')
 <!-- RECENT PROPERTY -->
 <section id="agent-p-2" class="property-details bg_light padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 bottom40">
                <h2 class="text-uppercase">Search <span class="color_red">PROPERTY</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
                <p class="margin-t-20">Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                    elementum
                    sed varius at, adipiscing
                    <br>vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                </p>
            </div>
        </div>
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
</section>
<!-- #/RECENT PROPERTY -->
@endsection
