<div class="s-content__pagenav group">
    @switch($randombrick[1]->type)
             @case("standart")

                @php
                    $b = route("brick.standart",$randombrick[1] -> title_slug)
                @endphp


                 @break
             @case("gallery")
                @php
                    $b = route("brick.gallery",$randombrick[1] -> title_slug)
                @endphp



                 @break
             @case("audio")
                @php
                    $b = route("brick.audio",$randombrick[1] -> title_slug)
                @endphp



                 @break
             @case("video")
                @php
                    $b = route("brick.video",$randombrick[1] -> title_slug)
                @endphp



                 @break
             @default

         @endswitch
    <div class="prev-nav">
        <a href="{{$b}}" rel="prev">
            <span>Previous</span>
            {{$randombrick[1] -> title}}
        </a>
    </div>
     <div class="next-nav">



         @switch($randombrick[0]->type)
             @case("standart")

                @php
                    $b = route("brick.standart",$randombrick[0] -> title_slug)
                @endphp


                 @break
             @case("gallery")
                @php
                    $b = route("brick.gallery",$randombrick[0] -> title_slug)
                @endphp



                 @break
             @case("audio")
                @php
                    $b = route("brick.audio",$randombrick[0] -> title_slug)
                @endphp



                 @break
             @case("video")
                @php
                    $b = route("brick.video",$randombrick[0] -> title_slug)
                @endphp



                 @break
             @default

         @endswitch
         <a href="{{$b}}" rel="next">
             <span>Next</span>
            {{$randombrick[0] -> title}}
         </a>
     </div>
 </div> <!-- end s-content__pagenav -->
