@extends('client.layout')
@section('content')
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Product Layout Style2</span>
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
                                        <img class="blur-up lazyload zoompro" data-zoom-image="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" alt="" src="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" />
                                    </div>
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                </div>
                                <div class="product-thumb product-thumb-1">
                                    <div id="gallery" class="product-dec-slider-1 product-tab-left">
                                        <a data-image="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" data-zoom-image="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" alt="" />
                                        </a>
                                        <a data-image="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" data-zoom-image="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{ asset('storage/client/assets/img/shop/shop-prajitura.webp') }}" alt="" />
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!--Product Feature-->
                            <div class="prFeatures">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/credit-card.png') }}" alt="Safe Payment" title="Safe Payment" />
                                        <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/shield.png') }}" alt="Confidence" title="Confidence" />
                                        <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/worldwide.png') }}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                        <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('storage/client/assets/images/phone-call.png') }}" alt="Hotline" title="Hotline" />
                                        <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Feature-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">Product Layout Style2</h1>
                                <div class="product-nav clearfix">
                                    <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="prInfoRow">
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$900.00</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">$788.00</span></span>
                                        </span>
                                    <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                            <span>You Save</span>
                                            <span id="SaveAmount-product-template" class="product-single__save-amount">
                                            <span class="money">$100.00</span>
                                            </span>
                                            <span class="off">(<span>16</span>%)</span>
                                        </span>
                                </p>
                                <div class="product-single__description rte">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                        <div class="product-form__item">
                                            <label class="header">Color: <span class="slVariant">Red</span></label>
                                            <div data-value="Black" class="swatch-element color black available">
                                                <input class="swatchInput" id="swatch-0-black" type="radio" name="option-0" value="Black"><label class="swatchLbl color small" for="swatch-0-black" style="background-color:black;" title="Black"></label>
                                            </div>
                                            <div data-value="Maroon" class="swatch-element color maroon available">
                                                <input class="swatchInput" id="swatch-0-maroon" type="radio" name="option-0" value="Maroon"><label class="swatchLbl color small" for="swatch-0-maroon" style="background-color:maroon;" title="Maroon"></label>
                                            </div>
                                            <div data-value="Blue" class="swatch-element color blue available">
                                                <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue"><label class="swatchLbl color small" for="swatch-0-blue" style="background-color:blue;" title="Blue"></label>
                                            </div>
                                            <div data-value="Dark Green" class="swatch-element color dark-green available">
                                                <input class="swatchInput" id="swatch-0-dark-green" type="radio" name="option-0" value="Dark Green"><label class="swatchLbl color small" for="swatch-0-dark-green" style="background-color:darkgreen;" title="Dark Green"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">Size: <span class="slVariant">XS</span></label>
                                            <div data-value="X-Small" class="swatch-element x-small available">
                                                <input class="swatchInput" id="swatch-1-x-small" type="radio" name="option-1" value="X-Small"><label class="swatchLbl small rounded" for="swatch-1-x-small" title="X-Small">X-Small</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="infolinks"><a href="#sizechart" class="sizelink btn"> Size Guide</a> <a href="#productInquiry" class="emaillink btn"> Ask About this Product</a></p>
                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
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
                                <div class="display-table shareRow">
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                    <div class="display-table-cell text-right">
                                        <div class="social-sharing">
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                            </a>
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                            </a>
                                            <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                            </a>
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                            </a>
                                            <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tabs-->
                            <div class="tabs-listing mb-4">
                                <div class="tab-container">
                                    <h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                                    <div id="tab1" class="tab-content">
                                        <div class="product-description rte">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                                        </div>
                                    </div>

                                    <h3 class="acor-ttl" rel="tab4">Shipping &amp; Returns</h3>
                                    <div id="tab4" class="tab-content">
                                        <h4>Returns Policy</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>

                                    </div>
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
                            <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('storage/client/assets/images/product-images/product-image1.jpg') }}" src="{{ asset('storage/client/assets/images/product-images/product-image1.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('storage/client/assets/images/product-images/product-image1-1.jpg') }}" src="{{ asset('storage/client/assets/images/product-images/product-image1-1.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
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
