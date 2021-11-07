@extends('layouts.master')

@section('title')

Gelecek

@endsection


@section('content')
<style>
 img{
    width: 100%;
    height: auto;
}
</style>
<section class="s-content s-content--single">
    <div class="row">
        <div class="column large-12">

            <article class="s-post entry format-standard">

                <div class="s-content__media">
                    <div style="text-align:center" class="s-content__post-thumb" >
                        <img  src="{{$veri -> brickimage -> url}}"
                              sizes="(max-width: 2100px) 100vw, 2100px" alt="" style="">
                    </div>
                </div> <!-- end s-content__media -->

                <div class="s-content__primary">

                    <h2 class="s-content__title s-content__title--post">{{$veri -> title }}</h2>

                    <ul class="s-content__post-meta">

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

</section> <!-- end s-content -->

@endsection

