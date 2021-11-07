
@extends('layouts.master')

@section('title')
Anasayfa

@endsection
@section('content')



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="tr" />




<style>
    .entry__thumb img{
        width: 100%
    }


</style>
<script>

    var li = document.querySelector('li') ;

    li.classList.add("current");



</script>

<section class="s-bricks">

    <div class="masonry">
        <div class="bricks-wrapper h-group">

            <div class="grid-sizer"></div>

            <div class="brick entry featured-grid animate-this">
                <div class="entry__content">

                    <div class="featured-post-slider">
                        @foreach ($slides as $slide)

                        <div class="featured-post-slide">



                            <div class="f-slide">

                                <div class="f-slide__background" style="background-image:url('{{$slide -> brickimage -> url}}');"></div>
                                <div class="f-slide__overlay"></div>

                                <div class="f-slide__content">
                                    {{-- <ul class="f-slide__meta">
                                        <li>September 06, 2020</li>
                                        <li><a href="#" >Naruto Uzumaki</a></li>
                                    </ul> --}}


                                    <h1 class="f-slide__title"><a href="
                                        @switch($slide -> type)
                                        @case("standart")
                                            {{ route("brick.standart",$slide -> title_slug)}}
                                            @break
                                        @case("gallery")
                                             {{route("brick.gallery",$slide -> title_slug)}}

                                            @break
                                        @case("audio")
                                            {{route("brick.audio",$slide -> title_slug)}}


                                            @break
                                        @case("video")
                                            {{route("brick.video",$slide -> title_slug)}}


                                            @break
                                        @default

                                    @endswitch
                                    " title="">{{$slide -> title}}</a></h1>
                                </div>

                            </div>


                            <!-- f-slide -->
                        </div> <!-- featured-post-slide -->
                         @endforeach




                    </div> <!-- end feature post slider -->




                    <div class="featured-post-nav">
                        <button class="featured-post-nav__prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
                        </button>
                        <button class="featured-post-nav__next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </button>
                    </div> <!-- featured-post-nav -->

                </div> <!-- end entry content -->
            </div> <!-- end entry, featured grid -->



            @foreach ($datas as $data)



            @switch($data -> type)
                @case("standart")
                @include('layouts.partials.brick.standart')

                    @break
                @case("quote")
                @include('layouts.partials.brick.quote')

                    @break

                @case("gallery")
                @include('layouts.partials.brick.gallery')

                    @break
                @case("audio")
                @include('layouts.partials.brick.audio')

                    @break
                @case("video")
                @include('layouts.partials.brick.video')

                    @break
                @default

            @endswitch
            @endforeach







        </div> <!-- end brick-wrapper -->

    </div> <!-- end masonry -->

    <div class="row">
        <div class="column large-12">
            <nav class="pgn">
                <ul>
                    <li>
                        <a class="pgn__prev" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
                        </a>
                    </li>
                    <li><a class="pgn__num" href="#0">1</a></li>
                    <li><span class="pgn__num current">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li>
                        <a class="pgn__next" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav> <!-- end pgn -->
        </div> <!-- end column -->
    </div> <!-- end row -->



</section>



@endsection

