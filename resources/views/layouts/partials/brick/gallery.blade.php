<article class="brick entry format-gallery animate-this">

    <div class="entry__thumb slider">
            <div class="slider__slides">

                @foreach ($data -> brickimages  as $image)


                <div class="slider__slide">
                    <img src="{{$image -> url}}" alt="" srcset="">
                </div>
                @endforeach

            </div>
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

            <h1 class="entry__title"><a href="{{route("brick.gallery",$data->title_slug)}}">{{$data -> title}}</a></h1>

        </div>
        <div class="entry__excerpt">
            <p>
                {{$data -> contents}}
            </p>
        </div>
    </div> <!-- end entry__text -->

</article>
