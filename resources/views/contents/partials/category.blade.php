@foreach ($veri -> brickcategory as $category )
                            <a href="{{route("category",$category -> category_slug)}}">{{$category -> category}}</a>

                            @endforeach
