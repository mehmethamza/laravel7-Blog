@extends('yonetim.layouts.master')

@section('header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@endsection
@section('content')






<form action="{{route("addblog")}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="type" value="{{$type}}">

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Başlık
                    </h5>
                </div>
                <div class="card-body">
                    <input class="form-control" placeholder="Başlık" required  name="title" type="text">
                </div>
            </div>


        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0 pb-1">
                        Yazar
                    </h5>
                </div>
                <div class="card-body pb-0">
                    <select id="type" name="author" required class="form-select  mb-3">


                        @foreach ($author as $authors)



                        <option value="{{$authors -> id}}">
                            {{$authors -> adısoyadı}} -- {{$authors -> cinsiyet}}
                        </option>
                        @endforeach





                    </select>
                </div>
            </div>
        </div>
    </div>


    @switch($type)
        @case("standart")
            @include('yonetim.forms.standart')

            @break
        @case("video")
             @include('yonetim.forms.video')


            @break
        @case("audio")
            @include('yonetim.forms.audio')


           @break
        @case("gallery")
           @include('yonetim.forms.gallery')


          @break
        @default

    @endswitch
</form>

@section('footer')



<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'icerik', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple-etiketler').select2();
    $('.js-example-basic-multiple-category').select2();
});
</script>

@endsection


@endsection
