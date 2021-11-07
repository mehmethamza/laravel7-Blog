@extends('yonetim.layouts.master')


@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.4/date-1.1.1/fc-4.0.0/fh-3.2.0/kt-2.6.4/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.2/sp-1.4.0/sl-1.3.3/datatables.min.css"/>



<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle ">
            Bloglar
        </h1>
    </div>

    <div class="card" >



        <div class="card-body">

            <div class="table-responsive mt-1">
                <table id="example" class="table table-hover table-striped table-bordered mt-1" style="width:100%">
                    <thead>
                        <tr class="table-light">
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Kategoriler</th>
                            <th>Yazar</th>
                            <th>Durum</th>
                            <th>İşlemler</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($bloglar as $blog)






                        <tr>
                            <td><img src="{{$blog -> brickimage -> url}}" style="width: 6rem" alt="" srcset=""></td>
                            <td> {{$blog -> title}}</td>
                            <td>
                                @foreach ($blog -> brickcategory as $kategori)

                                    {{$kategori -> category}}

                                @endforeach
                            </td>
                            <td>
                                {{ $blog -> brickauthor ->adısoyadı }}


                            </td>
                            <td>{{$blog -> durum}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="{{route("edit")}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$blog -> title_slug}}">
                                        <input type="hidden" name="type" value="{{$blog -> type}}">

                                        <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></button>
                                    </form>


                                </div>
                            </td>

                        </tr>



                        @endforeach


                    </tbody>
                </table>
            </div>








        </div>

        <div class="card-footer">
            <form method="post"  action="{{route("ekle")}}">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-2">
                      <select name="type" class="form-control" id="">
                          <option value="standart">Standart</option>
                          <option value="gallery">Gallery</option>
                          <option value="audio">Audio</option>
                          <option value="video">Video</option>
                          <option value="quote">Quote</option>
                      </select>

                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary">Yeni Yazı</button>
                  </div>
                </div>
              </form>


        </div>


    </div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.4/date-1.1.1/fc-4.0.0/fh-3.2.0/kt-2.6.4/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.2/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>
{{--
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'icerik', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>

<script>
    $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})

$(".tag").chosen({
  no_results_text: "Oops, nothing found!"
})
</script> --}}


@endsection


