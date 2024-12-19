<div>
    <!-- Search Box -->
    <div class="search_box blog-thumbnail">
        <div class="input-group">
            <input class="form-control custom_input" placeholder="Search" type="text">
            <span class="input-group-btn">
                <button class="btn btn-default custom_input" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>

    <!-- Popular Blog -->
    <div class="blog_info blog-thumbnail">
        <div class="blogimagedescription">
            <h3>Popular Blogs</h3>
        </div>
        <ul class="archieves clearfix">
            @foreach ($recentBlogs as $row)
                <li>
                    <div class="col-md-4 col-sm-2 padding_none">
                        <div class="blogimage_thumbnail">
                            <img src="{{ asset($row->image) }}" alt="{{ $row->name }}" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-10">
                        <div class="blogimagedescription">
                            <h3>
                                <a href="{{ route('frontend.posts.show', [$row->id, $row->slug]) }}">
                                    {{ $row->name }}
                                </a>
                            </h3>
                            <p class="detail">
                                <span>{{ $row->published_at ? $row->published_at->format('F d, Y') : '' }}</span>
                                <span>{{ $row->author_name }}</span>
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>



    {{-- <!-- Tags -->
    <div class="clearfix"></div>
    <h3 class="text-uppercase bottom40">Tags</h3>
    <div class="news-tag">
        @foreach ($tags as $tag)
            <a href="{{ route('frontend.tags.show', $tag->slug) }}">{{ $tag->name }}</a>
        @endforeach
    </div>

    <!-- Latest Properties -->
    <div class="row">
        <div class="col-md-12 bottom20">
            <h3 class="text-uppercase top40 bottom40">Latest <span class="color_red">Properties</span></h3>
        </div>
        <div class="col-md-12">
            <div id="agent-3-slider" class="owl-carousel">
                @foreach ($latestProperties as $property)
                    <div class="item">
                        <div class="property_item">
                            <div class="image">
                                <a href="{{ route('frontend.properties.show', $property->slug) }}">
                                    <img src="{{ $property->image }}" alt="{{ $property->title }}"
                                        class="img-responsive">
                                </a>
                                <div class="feature">
                                    <span class="tag-2">{{ $property->status }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

</div>
