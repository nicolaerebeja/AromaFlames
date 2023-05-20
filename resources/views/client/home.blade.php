@extends('client.layout')
@section('content')
<div id="page-content">
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section sliderFull">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="{{ asset('storage/client/assets/img/slideshow-banners/candle1.webp') }}"
                         src="{{ asset('storage/client/assets/img/slideshow-banners/candle1.webp') }}" alt="Shop Our New Collection"
                         title="Shop Our New Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content bottom">
                            <div class="wrap-caption center">
                                <h2 class="h1 mega-title slideshow__title">Lumânări artizanale unice</h2>
                                <span class="mega-subtitle slideshow__subtitle">Descoperă colecția
                                            noastră</span>
                                <span class="btn" onclick="window.open('{{ route('categoryProduct', 'Toate-Lumânările') }}')" >Shop now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="{{ asset('storage/client/assets/img/slideshow-banners/candle2.webp') }}"
                         src="{{ asset('storage/client/assets/img/slideshow-banners/candle2.webp') }}" alt="Shop Our New Collection"
                         alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content bottom">
                            <div class="wrap-caption center">
                                <h2 class="h1 mega-title slideshow__title">Stil si rafinament in flacara</h2>
                                <span class="mega-subtitle slideshow__subtitle">Explorează lumanările
                                            noastre</span>
                                <span class="btn" onclick="window.open('{{ route('categoryProduct', 'Toate-Lumânările') }}')">Shop now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest product -->
    <div class="collection-box collection-box-style1 section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">COLECțIILE NOASTRE </h2>
                        <p>Descoperă colecția noastră de lumânări, inspirată de cele mai recente tendințe în
                            materie de design. </p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="collection-grid-item">
                        <a href="{{ route('categoryProduct', 'Lumânări-în-recipient') }}" class="collection-grid-item__link">
                            <img data-src="{{ asset('storage/client/assets/img/collection/lumanari_in_recipent.webp') }}"
                                 src="{{ asset('storage/client/assets/img/collection/lumanari_in_recipent.webp') }}" alt="Hot"
                                 class="blur-up lazyloaded">
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">LUMÂNĂRI ÎN
                                    RECIPIENT</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="collection-grid-item">
                        <a href="{{ route('categoryProduct', 'Lumânări-formă') }}" class="collection-grid-item__link">
                            <img data-src="{{ asset('storage/client/assets/img/collection/lumanari_forma.webp') }}"
                                 src="{{ asset('storage/client/assets/img/collection/lumanari_forma.webp') }}" alt="Denim"
                                 class="blur-up ls-is-cached lazyloaded">
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">LUMÂNĂRI
                                    FORMĂ</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="collection-grid-item">
                        <a href="{{ route('categoryProduct', 'Cadouri') }}" class="collection-grid-item__link">
                            <img data-src="{{ asset('storage/client/assets/img/collection/cadouri.webp') }}"
                                 src="{{ asset('storage/client/assets/img/collection/cadouri.webp') }}" alt="Summer"
                                 class="blur-up ls-is-cached lazyloaded">
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">CADOURI
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="collection-grid-item">
                        <a href="{{ route('categoryProduct', 'Wax-Melts') }}" class="collection-grid-item__link">
                            <img data-src="{{ asset('storage/client/assets/img/collection/wax_melts.webp') }}"
                                 src="{{ asset('storage/client/assets/img/collection/wax_melts.webp') }}" alt="Classic"
                                 class="blur-up lazyloaded">
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Wax Melts
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest product -->

    <!--  -->
    <!-- feature content -->
    <div class="section feature-content">
        <div class="container ">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Despre Aroma Flames </h2>
                    </div>
                </div>


                <div class="feature-row ml-3 mr-3">
                    <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                        <img src="{{ asset('storage/client/assets/img/despre_af.webp') }}" alt="Fast Fashion Only available at BElle"
                             title="Fast Fashion Only available at BElle">
                    </div>
                    <div
                        class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                        <div class="row-text">
                            <div class="rte-setting featured-row__subtext">
                                <p>"La AromaFlames, ne-am specializat in crearea de lumanari decorative
                                    handmade, care aduc un farmec si o atmosfera calda in casele oamenilor.
                                    Fiecare lumanare este creata cu atentie si pasiune, folosind ingrediente de
                                    calitate si arome delicate.</p>
                                <p>Familia noastra a inceput aceasta afacere din pasiunea pentru arta si
                                    designul de interior, si de atunci ne-am dedicat sa oferim clientilor nostri
                                    cele mai frumoase si unice lumanari decorative. Ne bucuram sa vedem cum
                                    creatiile noastre aduc un strop de caldura si confort in casele oamenilor,
                                    si suntem mandri sa facem parte din momentele speciale din viata lor.</p>
                            </div>
                            <a href="{{ route('categoryProduct', 'Toate-Lumânările') }}" class="btn" >Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end feature content -->

    <!-- store feature -->
    <div class="store-feature section mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="display-table store-info">
                        <li class="display-table-cell">
                            <i class="icon anm anm-truck-line"></i>
                            <h5>LIVRARE GRATUITA</h5>
                            <span class="sub-text">Livrare gratuită pentru orice comandă cu valoare mai mare de
                                        500 Mdl.</span>
                        </li>
                        <li class="display-table-cell">
                            <i class="icon anm anm-repeat-alt"></i>
                            <h5>DREPT DE RETUR 14 ZILE
                            </h5>
                            <span class="sub-text">Dacă vă răzgândiți, vă vom schimba sau rambursa cu plăcere în
                                        14 de zile de la cumpărare * exceptie fac prod. personalizate.</span>
                        </li>
                        <li class="display-table-cell">
                            <i class="icon anm anm-phone-call-r"></i>
                            <h5>SUPORT TELEFONIC
                            </h5>
                            <span class="sub-text">Puteți să obțineți răspunsuri rapide și precise la
                                        întrebările dumneavoastră.</span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end store feature -->

    <!-- blog -->
    <div class="latest-blog section pt-0 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Latest From our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="wrap-blog">
                        <a href="blog-left-sidebar.html" class="article__grid-image">
                            <img src="{{ asset('storage/client/assets/img/blog/blog.webp') }}" alt="It's all about how you wear"
                                 title="It's all about how you wear" class="blur-up lazyloaded">
                        </a>
                        <div class="article__grid-meta article__grid-meta--has-image">
                            <div class="wrap-blog-inner">
                                <h2 class="h3 article__title">
                                    <a href="blog-left-sidebar.html">It's all about how you wear</a>
                                </h2>
                                <span class="article__date">May 02, 2017</span>
                                <div class="rte article__grid-excerpt">
                                    I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you a complete account...
                                </div>
                                <ul class="list--inline article__meta-buttons">
                                    <li><a href="blog-article.html">Read more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="wrap-blog">
                        <a href="blog-left-sidebar.html" class="article__grid-image">
                            <img src="{{ asset('storage/client/assets/img/blog/blog.webp') }}" alt="27 Days of Spring Fashion Recap"
                                 title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded">
                        </a>
                        <div class="article__grid-meta article__grid-meta--has-image">
                            <div class="wrap-blog-inner">
                                <h2 class="h3 article__title">
                                    <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                </h2>
                                <span class="article__date">May 02, 2017</span>
                                <div class="rte article__grid-excerpt">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                </div>
                                <ul class="list--inline article__meta-buttons">
                                    <li><a href="blog-article.html">Read more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->

</div>
@endsection
