@extends('client.layout')
@section('content')

    <!--Body Content-->
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image">
                    <img class="blur-up lazyload"
                         data-src="{{ asset('storage/client/assets/img/shop-candles.webp') }} "
                         src="{{ asset('storage/client/assets/img/shop-candles.webp') }}" alt="Women"
                         title="Women"/>
                </div>
                <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Răsfățați-vă
                        cu o lumină rafinată</h1></div>
            </div>
        </div>
        <!--End Collection Banner-->

        <div class="container mt-4">

            <div class="row">
                <!--Main Content-->

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="productList">
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @foreach ($category->products as $product)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="{{ route('productView', str_replace(' ', '-', $product->name)) }}">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                     data-src="{{ asset($product->images) }}"
                                                     src="{{ asset($product->images) }}" alt="image" title="product"/>
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                     data-src="{{ asset($product->images) }}"
                                                     src="{{ asset($product->images) }}" alt="image" title="product"/>
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->

{{--                                            <form class="variants add" action="#"--}}
{{--                                                  onclick="window.location.href='{{ route('productView', $product->name) }}'"--}}
{{--                                                  method="post">--}}
{{--                                                <button class="btn btn-addto-cart" type="button">Selectează opțiunile--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
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
                                                <span class="price">{{ $product->price }} Mdl</span>
                                            </div>
                                            <!-- End product price -->

                                        </div>
                                        <!-- End product details -->
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>


                <!--End Main Content-->
            </div>
        </div>

    </div>
    <!--End Body Content-->

@endsection
