    <!-- ESTIMATE -->
    <section id="estimate" class="padding parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="estimate_image">
                        <img src="{{ URL('/assets/') }}/images/estimate.png" alt="image" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="estimate_form">
                        <h2 class="text-uppercase">Submit Your<span class="color_red"> Query</span></h2>
                        <div class="line_1"></div>
                        <div class="line_2"></div>
                        <div class="line_3"></div>
                        <p>Want to find out more about DFI Realtors? Please complete the form below and we’ll be back to
                            you shortly.</p>
                        <div class="property-query-area top40">

                            <form class="findus" method="POST" action="{{ route('estimate.submit') }}">
                                @csrf
                                <div class="row">
                                    {{-- Full Name --}}
                                    <div class="col-md-12">
                                        <div class="single-query">
                                            <input class="keyword-input" name="full_name" placeholder="Full Name"
                                                type="text" value="{{ old('full_name') }}">
                                            @error('full_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Phone Number --}}
                                    <div class="col-md-12">
                                        <div class="single-query">
                                            <input class="keyword-input" name="phone_number" placeholder="Phone Number"
                                                type="text" value="{{ old('phone_number') }}">
                                            @error('phone_number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Location Dropdown --}}
                                    <div class="col-md-12">
                                        <div class="single-query">
                                            <select class="selectpicker" name="location_id" data-live-search="true">
                                                <option value="">Location</option>
                                                @foreach (get_all_locations() as $location)
                                                    <option value="{{ $location->id }}"
                                                        {{ old('location_id') == $location->id ? 'selected' : '' }}>
                                                        {{ $location->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('location_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Property Type Dropdown --}}
                                    <div class="col-md-12">
                                        <div class="single-query">
                                            <select class="selectpicker" name="property_type_id" data-live-search="true">
                                                <option value="">Property Type</option>
                                                @foreach (get_all_properties() as $type)
                                                    <option value="{{ $type->id }}"
                                                        {{ old('property_type_id') == $type->id ? 'selected' : '' }}>
                                                        {{ $type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('property_type_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Min Beds Dropdown --}}
                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-query">
                                            <select class="selectpicker" name="min_beds" data-live-search="true">
                                                <option value="">Min Beds</option>
                                                @foreach (range(1, 6) as $bed)
                                                    <option value="{{ $bed }}"
                                                        {{ old('min_beds') == $bed ? 'selected' : '' }}>
                                                        {{ $bed }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('min_beds')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Min Baths Dropdown --}}
                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-query">
                                            <select class="selectpicker" name="min_baths" data-live-search="true">
                                                <option value="">Min Baths</option>
                                                @foreach (range(1, 6) as $bath)
                                                    <option value="{{ $bath }}"
                                                        {{ old('min_baths') == $bath ? 'selected' : '' }}>
                                                        {{ $bath }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('min_baths')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Min Area --}}
                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-query">
                                            <input class="keyword-input" name="min_area" placeholder="Min Area (sq ft)"
                                                type="number" value="{{ old('min_area') }}">
                                            @error('min_area')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Max Area --}}
                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-query">
                                            <input class="keyword-input" name="max_area" placeholder="Max Area (sq ft)"
                                                type="number" value="{{ old('max_area') }}">
                                            @error('max_area')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="col-md-12">
                                        <div class="query-submit-button">
                                            <button type="submit" class="btn_fill">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- #/ESTIMATE -->
