@extends('client.layout')
@section('content')
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="{{ route('index') }}" title="acasa">Acasă</a>
                    <span aria-hidden="true">›</span>
                    <span><a
                            href="{{ route('categoryProduct', str_replace(' ', '-', $product->category->name)) }}"> {{$product->category->name}} </a></span>
                    <span aria-hidden="true">›</span>
                    <span>{{$product->name}}</span>
                </div>
            </div>
            <!--End Breadcrumb-->


            <div id="ProductSection-product-template" class="product-template__container prstyle2 container">


                <!--#ProductSection-product-template-->
                <div class="product-single product-single-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img product-single__photos bottom">
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img class="blur-up lazyload zoompro"
                                             data-zoom-image="{{ asset($product->images) }}"
                                             alt="aromaflames image"
                                             src="{{ asset($product->images) }}"/>
                                    </div>
                                    @if ($product->sale > 0)
                                        <div class="product-labels">
                                            <span class="lbl on-sale">Sale</span>
                                        </div>
                                    @endif
                                </div>


                            </div>
                            <!--Product Feature-->
                            <div class="prFeatures">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        {{--                                        <img src="{{ asset('storage/client/assets/images/credit-card.png') }}"--}}
                                        {{--                                             alt="Safe Payment" title="LIVRARE GRATUITA"/>--}}
                                        <div class="details"><h3>LIVRARE GRATUITA</h3> Livrare gratuită pentru orice
                                            comandă cu valoare mai mare de 500 Mdl.
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        {{--                                        <img src="{{ asset('storage/client/assets/images/shield.png') }}"--}}
                                        {{--                                             alt="Confidence" title="Confidence"/>--}}
                                        <div class="details"><h3>DREPT DE RETUR 14 ZILE </h3>Dacă vă răzgândiți, vă vom
                                            schimba sau rambursa cu plăcere în 14 de zile de la cumpărare * exceptie fac
                                            prod. personalizate.
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        {{--                                        <img src="{{ asset('storage/client/assets/images/worldwide.png') }}"--}}
                                        {{--                                             alt="Worldwide Delivery" title="Worldwide Delivery"/>--}}
                                        <div class="details"><h3>SUPORT TELEFONIC </h3> Puteți să obțineți răspunsuri
                                            rapide și precise la întrebările dumneavoastră.
                                        </div>
                                    </div>
                                    {{--                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">--}}
                                    {{--                                        <img src="{{ asset('storage/client/assets/images/phone-call.png') }}"--}}
                                    {{--                                             alt="Hotline" title="Hotline"/>--}}
                                    {{--                                        <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141--}}
                                    {{--                                            456 789, 4125 666 888--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                            <!--End Product Feature-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{$product->name}}</h1>
                                <div class="prInfoRow">
                                    @if ($product->stock > 0)
                                        <div class="product-stock">
                                            <span class="instock">In Stock</span>
                                        </div>
                                    @else
                                        <div class="product-stock">
                                            <span class="outstock">La Comandă</span>
                                        </div>
                                    @endif


                                </div>
                                @if ($product->sale > 0)
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">{{ $product->price }} Mdl</span></s>
                                        <span
                                            class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template"><span class="money">{{ $product->price - $product->sale }} Mdl</span></span>
                                </span>
                                        <span class="discount-badge">
                                    <span class="devider">|</span>&nbsp;
                                    <span>You Save</span>
                                    <span id="SaveAmount-product-template" class="product-single__save-amount">
                                        <span class="money">{{ $product->price - ($product->price - $product->sale) }} Mdl</span>
                                    </span>
                                    <span
                                        class="off">(<span>{{ round(($product->sale / $product->price) * 100) }}</span>%)</span>
                                </span>
                                    </p>
                                @else
                                    <h3 class="mb-3">{{ $product->price  }} Mdl</h3>
                                @endif

                                <div class="product-single__description rte mb-3 mt-2">
                                    {!! $product->info !!}
                                </div>

                                <form method="post" action="http://annimexweb.com/cart/add"
                                      id="product_form_10508262282" accept-charset="UTF-8"
                                      class="product-form product-form-product-template hidedropdown"
                                      enctype="multipart/form-data">


                                    <div class="swatch clearfix swatch-1 option2 mt-3" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">PARFUM: <span
                                                    class="slVariant">No Selection</span></label>

                                            @foreach($productoption as $option)
                                                @if(!empty($option) && $option->aroma && $option->stock > 0)
                                                    <div data-value="{{$option->aroma}}" class="swatch-element aroma">
                                                        <input class="swatchInput" id="swatch-1-{{$option->aroma}}"
                                                               type="radio"
                                                               name="aroma"
                                                               value="{{$option->aroma}}">
                                                        <label class="swatchLbl medium rectangle"
                                                               for="swatch-1-{{$option->aroma}}"
                                                               title="{{$option->aroma}}">{{$option->aroma}}</label>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="swatch clearfix swatch-1 option2 mt-3" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">Culoare: <span
                                                    class="slVariant">No Selection</span></label>

                                            @foreach($productoption as $option)
                                                @if(!empty($option) && $option->color && $option->stock > 0)
                                                    <div data-value="{{$option->color}}" class="swatch-element color">
                                                        <input class="swatchInput" id="swatch-1-{{$option->color}}"
                                                               type="radio"
                                                               name="color"
                                                               value="{{$option->color}}">
                                                        <label class="swatchLbl medium rectangle"
                                                               for="swatch-1-{{$option->color}}"
                                                               title="{{$option->color}}">{{$option->color}}</label>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="swatch clearfix swatch-1 option2 mt-3" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">Aplicatii: <span
                                                    class="slVariant">No Selection</span></label>

                                            @foreach($productoption as $option)
                                                @if(!empty($option) && $option->options && $option->stock > 0)
                                                    <div data-value="{{$option->options}}"
                                                         class="swatch-element options">
                                                        <input class="swatchInput" id="swatch-1-{{$option->options}}"
                                                               type="radio"
                                                               name="options"
                                                               value="{{$option->options}}">
                                                        <label class="swatchLbl medium rectangle"
                                                               for="swatch-1-{{$option->options}}"
                                                               title="{{$option->options}}">{{$option->options}}</label>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>

                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                           class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="price" value="{{ $product->price - $product->sale }}">
                                        <input type="hidden" id="items" value="1">
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                            </div>
                            <!--Product Tabs-->
                            <div id="tab1" class="tab-content">
                                <div class="product-description rte">
                                    {!!   $product->description->description  !!}
                                </div>
                            </div>
                            <!--End Product Tabs-->
                        </div>
                    </div>
                    <!--End-product-single-->

                    <!--Related Product Slider-->
                    <div class="related-product grid-products mt-4">
                        <header class="section-header">
                            <h1 class="section-header__title text-center h1"><span>Produse similare</span></h1>
                        </header>
                        <div class="productPageSlider">
                            @foreach ($relatedProducts as $product)
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{ route('productView', str_replace(' ', '-', $product->name)) }}">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{ asset($product->images) }}"
                                                 src="{{ asset($product->images) }}"
                                                 alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{ asset($product->images) }}"
                                                 src="{{ asset($product->images) }}"
                                                 alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            @if ($product->sale > 0)
                                                <div class="product-labels rectangular"><span class="lbl on-sale">{{ number_format($product->sale, 0) }} %</span>
                                                </div>
                                            @endif
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        <form class="variants add" action="#"
                                              onclick="window.location.href='{{ route('productView', str_replace(' ', '-', $product->name)) }}'"
                                              method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Selectează
                                                opțiunile
                                            </button>
                                        </form>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">{{ $product->name }}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            @if ($product->sale > 0)
                                                <span class="old-price">{{ $product->price }} Mdl</span>
                                                <span class="price">{{ $product->price - $product->sale }}.00 Mdl</span>
                                            @else
                                                <span class="price">{{ $product->price }} Mdl</span>
                                            @endif
                                        </div>
                                        <!-- End product price -->

                                    </div>
                                    <!-- End product details -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--End Related Product Slider-->


                </div>
                <!--#ProductSection-product-template-->
            </div>
            @endsection

            @section('script')
                <script>


                </script>
@endsection
