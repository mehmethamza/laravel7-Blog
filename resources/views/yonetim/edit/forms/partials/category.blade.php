<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0 pb-0">
            Kategoriler
        </h5>
    </div>
    <div class="card-body mt-0 pt-2">

            <select  required data-placeholder="Lütfen Kategori Seçiniz" class="js-example-basic-multiple-category" style="width: 100%" multiple class="chosen-select" name="category[]">



                @foreach ($category as $categorys)



                <option value="{{$categorys -> id}}"

                    @if ( in_array( $categorys -> id ,$kontrol["mycategory"]  ))
                        {{"selected"}}
                    @endif
                    >
                    {{$categorys -> category}}
                </option>
                @endforeach




            </select>

    </div>
</div>
