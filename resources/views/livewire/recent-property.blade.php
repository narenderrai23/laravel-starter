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
            <h3>Popular Properties</h3>
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
</div>
