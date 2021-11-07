@extends('yonetim.layouts.master')


@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.4/date-1.1.1/fc-4.0.0/fh-3.2.0/kt-2.6.4/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.2/sp-1.4.0/sl-1.3.3/datatables.min.css"/>

<div class="row">
    <div class="col-lg-6">
        <div class="card">

            <div class="card-body mb-0 pb-0">
                <table id="example1" class="table table-hover table-striped table-bordered mt-1">
                    <thead >
                        <tr class="table-light">
                            <th>Etiket</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($tags as $tag)


                        <tr>
                            <td>{{$tag -> tag}}</td>
                            <td>
                                <form method="POST" action="{{route("sil.tag")}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$tag-> id}}">
                                <button class="btn btn-sm btn-danger" type="submit"> Kaldır</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer pt-0">
                <form action="{{route("ekle.tag")}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" name="tag" placeholder="Etiket Adı">
                        </div>
                        <div class="col">
                            <button  class="btn btn-secondary" type="submit">Ekle</button>
                        </div>
                      </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">

            <div class="card-body mb-0 pb-0">
                <table id="example2" class="table table-hover table-striped table-bordered  mt-1">
                    <thead>
                        <tr class="table-light">
                            <th>Kategori</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($categorys as $category)


                        <tr>
                            <td>{{$category -> category}}</td>
                            <td>
                                <form method="POST" action="{{route("sil.category")}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$category-> id}}">
                                <button class="btn btn-sm btn-danger" type="submit"> Kaldır</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer pt-0">
                <form action="{{route("ekle.category")}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" name="category" placeholder="Kategori Adı">
                        </div>
                        <div class="col">
                            <button  class="btn btn-secondary" type="submit">Ekle</button>
                        </div>
                      </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">
                <table id="example3" class="table table-hover table-striped table-bordered  mt-1">
                    <thead>
                        <tr class="table-light">
                            <th>Adı Soyadı</th>
                            <th>Cinsiyet</th>
                            <th>Sözü</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)



                        <tr>
                            <td>{{$author -> adısoyadı}}</td>
                            <td>{{$author -> cinsiyet}}</td>
                            <td>{{$author -> sözü}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.4/date-1.1.1/fc-4.0.0/fh-3.2.0/kt-2.6.4/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.2/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example1').DataTable( {
        "scrollY":        "100px",
        "scrollCollapse": true,
        "paging":         false
    } );
    $('#example2').DataTable( {
        "scrollY":        "100px",
        "scrollCollapse": true,
        "paging":         false
    } );
    $('#example3').DataTable( {
        "scrollY":        "100px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>


@endsection
