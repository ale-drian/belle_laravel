<div>
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs" role="navigation" aria-label="breadcrumbs">
                    <a href="/" title="Back to the home page">Home</a><span
                        aria-hidden="true">›</span><span>Producto</span>
                </div>
            </div>
            <!--End Breadcrumb-->

            <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                <!--product-single-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img">
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img class="img-detail__size"
                                            data-zoom-image="{{ asset( 'storage/'.$product->image )}}"
                                            alt=""
                                            src="{{ asset( 'storage/'.$product->image ) }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{ $product->name }}</h1>
                                <div class="product-nav clearfix">
                                    <a href="#" class="next" title="Next"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="prInfoRow">
                                    <div class="product-stock"> <span class="instock ">{{ $product->state }}</span>
                                        <span class="outstock hide">Unavailable</span> </div>
                                    <div class="product-sku">Vendedor: <a href="{{ route('profile-seller-public',['id'=> $product->user->id]) }}" class="variant-sku">{{ $product->user->name }}</a></div>
                                    <div class="product-review"><a class="reviewLink" href="#tab2"><i
                                                class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i
                                                class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i
                                                class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6
                                                reviews</span></a></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <span class="product-price__price product-price__price-product-template">
                                        <span id="ProductPrice-product-template"><span class="money">S/ {{
                                                $product->price }}</span></span>
                                    </span>
                                </p>
                                <div class="product-single__description rte">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                        and praising pain was born and I will give you a complete account of the
                                        system, and expound the actual teachings of the great explorer of the truth,
                                        the master-builder of human happiness.</p>
                                </div>
                                <form method="post" action="http://annimexweb.com/cart/add"
                                    id="product_form_10508262282" accept-charset="UTF-8"
                                    class="product-form product-form-product-template hidedropdown"
                                    enctype="multipart/form-data">
                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                        <div class="product-form__item">
                                            <label class="header">Color: <span class="slVariant">Rojo -
                                                    Amarillo</span></label>
                                        </div>
                                    </div>

                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">Tipo: <span class="slVariant">Mujer</span></label>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">Categoría: <span class="slVariant">{{
                                                    $product->category->name }}</span></label>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                            <label class="header">Talla: <span class="slVariant">{{ $product->size->name
                                                    }}</span></label>
                                        </div>
                                    </div>

                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit">
                                                <span id="AddToCartText-product-template">Comprar ahora</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i
                                                    class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Lista de
                                                    Deseos</span></a>
                                        </div>
                                    </div>
                                    <div class="display-table-cell text-right">
                                        <div class="social-sharing">
                                            <a target="_blank" href="#"
                                                class="btn btn--small btn--secondary btn--share share-facebook"
                                                title="Share on Facebook">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                            </a>
                                            <a target="_blank" href="#"
                                                class="btn btn--small btn--secondary btn--share share-twitter"
                                                title="Tweet on Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" title="Share on google+"
                                                class="btn btn--small btn--secondary btn--share">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                            <a target="_blank" href="#"
                                                class="btn btn--small btn--secondary btn--share share-pinterest"
                                                title="Pin on Pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest"
                                                title="Share by Email" target="_blank">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End-product-single-->
                    <!--Product Fearure-->
                    <div class="prFeatures">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                <img src="{{asset('assets_belle/images/credit-card.png')}}" alt="Safe Payment"
                                    title="Safe Payment" />
                                <div class="details">
                                    <h3>Pago Seguro</h3>Con cualquier método de pago.
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                <img src="{{ asset('assets_belle/images/shield.png') }}" alt="Confidence"
                                    title="Confidence" />
                                <div class="details">
                                    <h3>Confidencial</h3>Protección de tu compra y datos personales.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Fearure-->
                    <!--Product Tabs-->


                    <!--Related Product Slider-->
                    <div class="related-product grid-products">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Productos Relacionados</span></h2>
                            <p class="sub-heading">Quizás te interese los siguientes productos</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image1.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image1.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image1.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image1.jpg') }}"
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
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
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
                                        <span class="old-price">S/ 15.00</span>
                                        <span class="price">S/ 16.00</span>
                                    </div>
                                    <!-- End product price -->

                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"
                                        method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Elastic Waist Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">S/ 17.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"
                                        method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">3/4 Sleeve Kimono Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">S/ 15.00</span>
                                    </div>
                                    <!-- End product price -->

                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"
                                        method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Cape Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">S/ 19.00</span>
                                        <span class="price">S/ 17.00</span>
                                    </div>
                                    <!-- End product price -->

                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}"
                                            src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"
                                        method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Paper Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">S/ 15.00</span>
                                    </div>
                                    <!-- End product price -->

                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                    <!--End Related Product Slider-->

                    <!--Recently Product Slider-->
                    <!--End Recently Product Slider-->
                </div>
                <!--#ProductSection-product-template-->
            </div>
            <!--MainContent-->
        </div>
        <!--End Body Content-->
    </div>
</div>
