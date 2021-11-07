<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Install and Use CKEditor In Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12  mt-4">
                <div class="card-body">
                    <form method="post" action="{{route("upload.contents")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea name="summary-ckeditor" id="summary-ckeditor" cols="30" rows="10"></textarea>



                        </div>
                        <button type="submit">sd</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>





<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>
