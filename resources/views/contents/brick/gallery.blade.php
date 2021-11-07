@extends('layouts.master')

@section('title')

Gelecek

@endsection


@section('content')
<style>

    .sld{
        width:  100%;
        height: 40vw;

    }
</style>
<section class="s-content s-content--single">
    <div class="row">
        <div class="column large-12">

            <article class="s-post entry format-gallery">

                <div class="s-content__media">
                    <div class="entry__slider slider">
                        <div class="slider__slides">



                            @foreach ($veri -> brickimages  as $image)


                                <div class="slider__slide">
                                    <img class="sld" src="{{$image -> url}}"alt=""   sizes="(max-width: 2100px) 100vw, 2100px">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div> <!-- end s-content__media -->

                <div class="s-content__primary">

                    <h2 class="s-content__title s-content__title--post">{{$veri -> title }}</h2>

                    <ul class="s-content__post-meta">
                        <li class="date">September 05, 2020</li>
                        <li class="cat">
                            @include('contents.partials.category')
                        </li>
                    </ul>

                    {!! $veri  -> realcontents !!}

                    @include('contents.tags')
                    @include('contents.author')
                    @include('contents.navgroup')


                </div> <!-- end s-content__primary -->
            </article>

        </div> <!-- end column -->
    </div> <!-- end row -->


    <!-- comments
    ================================================== -->
    @include('contents.comments.commentswrap')
     <!-- end comments-wrap -->

</section>


@endsection
