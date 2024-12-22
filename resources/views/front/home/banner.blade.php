<!-- BANNER -->
<div class="hero_slider padding-bottom-top-120 parallaxie">
    <div class="container padding-bottom-top-120">
        <div class="row padding_bottom">
            <div class="col-sm-12 padding_top">
                <h2 class="text-capitalize text-center top30 color_white"> DFI Realtors your places at
                    <span class="color_red">idea homes</span>
                </h2>
                <div class="line_1-1"></div>
                <div class="line_2-2"></div>
                <div class="line_3-3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="search_2 search_2_set">
                    <form action="{{ route('property.search') }}" method="GET" id="frmhomesearch" class="findus clearfix">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 b-r">
                                <div class="single-query">
                                    <input type="text" class="keyword-input" name="keyword" placeholder="Keyword"
                                           value="{{ request('keyword') }}">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="single-query">
                                    <select class="selectpicker" name="location_id" data-live-search="true">
                                        <option value="">Location</option>
                                        @foreach (get_all_locations() as $location)
                                            <option value="{{ $location->id }}"
                                                    {{ request('location_id') == $location->id ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="single-query">
                                    <select class="selectpicker" name="category_id" data-live-search="true">
                                        <option value="">Property Type</option>
                                        @foreach (get_all_properties() as $type)
                                            <option value="{{ $type->id }}"
                                                    {{ request('category_id') == $type->id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-12 text-right">
                                <div class="query-submit-button form-group">
                                    <button type="submit" class="btn_fill">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- #/BANNER -->
