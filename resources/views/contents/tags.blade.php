<p class="s-content__post-tags">
    <span>Etiketler :</span>
    @foreach ($veri -> bricktag as $item)
        <a href="#">{{$item -> tag}}</a>
    @endforeach

</p>
