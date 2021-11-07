{{-- <div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0 pb-1">
            Resim
        </h5>
    </div>
    <div class="card-body mt-0 pt-2">
        <input required type="file" name="resimmultiple[]" multiple id="">
    </div>
</div> --}}



<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0 pb-1">

            Kayıtlı resimler <button type="button" style="float: right" class="delete btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </h5>
    </div>
    <div class="card-body mt-0 pt-2" style="text-align: center">
        <img   data-index="0" style="height: 150px" class="slider" src="" alt="" srcset="">

    </div>

    <div class="card-footer">
        <button style="float: right" class="sag btn btn-danger">></button>

        <button style="float: left" class="sol btn btn-danger"><</button>

    </div>


</div>




@section('script')
@php
$resim = array();

@endphp

<script>

    var resim = [];

    @foreach ($brick -> brickimages  as $item)
        resim.push("{{$item -> url}}");
    @endforeach

    var limit = resim.length;

    var sag = $(".sag");
    var slider =$(".slider");
    var sol =$(".sol");
    var sil =$(".delete");



    slider.attr("src",resim[0]);



    sag.click(function () {




        var num = slider.attr("data-index");
        num = parseInt(num);

        if (num == limit -1) {
            num = 0;
        }
        else{
        num = num +1;

        slider.attr("data-index",num);

        slider.attr("src",resim[num]);
        }
        slider.attr("data-index",num);

        slider.attr("src",resim[num]);

    });

    sol.click(function () {


        console.log(resim);

        var num = slider.attr("data-index");
        num = parseInt(num);

        if (num == 0) {

        }
        else{
        num = num -1;

        slider.attr("data-index",num);

        slider.attr("src",resim[num]);
        }

    });

    sil.click(function () {
        console.log("hamza");
        $.ajax({
        url: "{{route("deletemultiimage")}}",
        type:"POST",
        data:{

          _token:"{{ csrf_token() }}"
        },
        success:function(response){
          console.log(response);
          if(response) {
            $('.success').text(response.success);
            reset();
          }
        },
        error: function(error) {
         console.log(error);
        }
       });

    });






</script>

@endsection


