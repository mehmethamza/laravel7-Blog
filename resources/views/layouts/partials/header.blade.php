<!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row s-header__content">

            <div class="s-header__logo">
                <a class="logo" href="index.html">
                    <img src="/images/logo.svg" alt="Homepage">
                </a>
            </div>

            <nav class="s-header__nav-wrap">

                <h2 class="s-header__nav-heading h6">Site Navigation</h2>

                <ul class="s-header__nav">
                    <li ><a href="/" class="anasayfa" title="">Anasayfa</a></li>
                    <li class="has-children kategori">
                        <a href="#0"   title="">Kategoriler</a>
                        <ul class="sub-menu">
                            @foreach ($categorys as $category)


                            <li><a href="{{route("category",$category -> category_slug)}}">{{$category -> category}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li class="has-children">
                        <a href="#0" title="">Blog</a>
                        <ul class="sub-menu">
                        <li><a href="single-video.html">Video </a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-gallery.html">Gallery Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="styles.html" title="">Styles</a></li>
                    <li><a href="about.html" title="">About</a></li>
                    <li><a href="contact.html" title="">Contact</a></li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="s-header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

            <a class="s-header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <div class="s-header__search">

                <form role="search" method="get" class="s-header__search-form" action="{{route("search")}}">
                    <label>
                        <span class="hide-content">Arama Yap:</span>
                        <input type="search" class="s-header__search-field" placeholder="Aradığınız Blog" value="" name="query" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="s-header__search-submit" value="Search">
                </form>

                <a href="#0" title="Close Search" class="s-header__overlay-close">Close</a>

            </div> <!-- end search wrap -->

            <a class="s-header__search-trigger" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->
