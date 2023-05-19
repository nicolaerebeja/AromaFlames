@extends('client.layout')
@section('content')
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.html" title="Back to the home page">Home</a><span
                        aria-hidden="true">›</span><span>{{$product->name}}</span>
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
                                             alt=""
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
                                        <img src="{{ asset('storage/client/assets/images/credit-card.png') }}"
                                             alt="Safe Payment" title="Safe Payment"/>
                                        <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment
                                            methods.
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/shield.png') }}"
                                             alt="Confidence" title="Confidence"/>
                                        <div class="details"><h3>Confidence</h3>Protection covers your purchase and
                                            personal data.
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/worldwide.png') }}"
                                             alt="Worldwide Delivery" title="Worldwide Delivery"/>
                                        <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over
                                            200+ countries &amp; regions.
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/phone-call.png') }}"
                                             alt="Hotline" title="Hotline"/>
                                        <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141
                                            456 789, 4125 666 888
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Feature-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{$product->name}}</h1>
                                <div class="product-nav clearfix">
                                    <a href="#" class="next" title="Next"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i></a>
                                </div>
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
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Cafea
                                                    cu lapte</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Capusuni</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Ciocolata</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Trandafir</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swatch clearfix swatch-1 option2 mt-3" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">CULOARE: <span
                                                    class="slVariant">No Selection</span></label>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Alb</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Bej</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Albastra</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Roz</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swatch clearfix swatch-1 option2 mt-3 mb-3" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">APLICATII: <span
                                                    class="slVariant">No Selection</span></label>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Foita Argintie</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Foita Aurie</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element">
                                                <input class="swatchInput" id="swatch-1" type="radio" name="option-1"
                                                       value="XS">
                                                <label class="swatchLbl medium rectangle" for="swatch-1" title="XS">Fara</label>
                                            </div>
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
                            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                            <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number
                                of grid to show and products from store admin.</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                             data-src="{{ asset('storage/client/assets/images/product-images/product-image1.jpg') }}"
                                             src="{{ asset('storage/client/assets/images/product-images/product-image1.jpg') }}"
                                             alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                             data-src="{{ asset('storage/client/assets/images/product-images/product-image1-1.jpg') }}"
                                             src="{{ asset('storage/client/assets/images/product-images/product-image1-1.jpg') }}"
                                             alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"
                                          method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options
                                        </button>
                                    </form>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Edna Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->

                                </div>
                                <!-- End product details -->
                            </div>

                        </div>
                    </div>
                    <!--End Related Product Slider-->


                </div>
                <!--#ProductSection-product-template-->
            </div>
@endsection
