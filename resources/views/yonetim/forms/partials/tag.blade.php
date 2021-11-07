<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0 pb-0">
            Taglar
        </h5>
    </div>
    <div class="card-body mt-0 pt-2">

            <select required data-placeholder="Etiketler"  style="width: 100%" multiple class="js-example-basic-multiple-etiketler" name="tag[]">
                @foreach ($tag as $tags)



                <option value="{{$tags -> id}}">
                    {{$tags -> tag}}
                </option>
                @endforeach


            </select>

    </div>
</div>
