<article class="brick entry format-standard animate-this">

    <div class="entry__thumb">
        <a href="{{route("brick.standart",$data->title_slug)}}" class="thumb-link">
            <img  src="{{$data-> brickimage -> url }}"alt="">
                 {{-- srcset="images/thumbs/masonry/woodcraft-600.jpg 1x, images/thumbs/masonry/woodcraft-1200.jpg 2x" --}}

        </a>
    </div> <!-- end entry__thumb -->

    <div class="entry__text">
        <div class="entry__header">

            <div class="entry__meta">
                <span class="entry__cat-links">

                    @foreach ($data -> brickcategory as $category)

                    <a href="{{route("category",$category->category_slug)}}">{{$category -> category}}</a>

                    @endforeach
                </span>
            </div>

            <h1 class="entry__title"><a href="{{route("brick.standart",$data->title_slug)}}">{{$data -> title}}.</a></h1>

        </div>
        <div class="entry__excerpt">
            <p>
                {!! $data -> contents !!}
            </p>
        </div>
    </div> <!-- end entry__text -->

</article> <!-- end entry -->
