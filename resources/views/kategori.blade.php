@extends('layouts.master')

@section('title')
Anasayfa

@endsection
@section('content')

@section('content')
<script>

    var li = document.querySelector('.kategori') ;

    li.classList.add("current");



</script>
<style>
    .entry__thumb img{
        width: 100%
    }
</style>

<!-- page header
    ================================================== -->
    <section class="s-pageheader">
        <div class="row current-cat">
            <div class="column">
                <h1 class="h2">Kategori: {{$name}}</h1>
            </div>
        </div>
    </section>


    <!-- masonry
    ================================================== -->
    <section class="s-bricks with-top-sep">

        <div class="masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper h-group">

                <div class="grid-sizer"></div>

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
    </section>

@endsection
