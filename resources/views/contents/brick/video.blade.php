@extends('layouts.master')

@section('title')

Gelecek

@endsection


@section('content')

<section class="s-content s-content--single">
    <div class="row">
        <div class="column large-12">

            <article class="s-post entry format-audio">

                <div class="s-content__media">
                    <div class="video-container">
                        {{-- <iframe src="https://www.youtube.com/watch?v=H00iYbuEcs4" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{$veri -> video}}?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
