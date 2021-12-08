<main id="main" class="main-site container">
    <!--Sidebar-->
    <div class="row pt-5">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
            <div class="sidebar_tags">
                <!--Categories-->
                <div class="sidebar_widget categories filter-widget">
                    <div class="widget-title"><h2>Categorias</h2></div>
                    <div class="widget-content">
                        <ul class="sidebar_categories">
                            @foreach ($categories as $category)
                            <li class="{{ count($category->sub_category)>0 ?'level1 sub-level':'level1'}}">
                                <a href="{{ route('category.name',['category_id'=>$category->id ]) }}" class="site-nav active">{{ $category->name }}</a>
                                @if (count($category->sub_category)>0)
                                    <ul class="sublinks" style="display:block;">
                                        @foreach ($category->sub_category as $sub_category)
                                            <li class="level2"><a href="#;" class="site-nav">{{ $sub_category->name }}</a></li>
                                        @endforeach
                                        <li class="level2"><a href="#;" class="site-nav">Ver todo</a></li>
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--Categories-->
                <!--Price Filter-->
                <div class="sidebar_widget filterBox filter-widget">
                    <div class="widget-title">
                        <h2>Precio</h2>
                    </div>
                    <div class="price-filter">
                        <form wire:submit.prevent="applyPrice">
                            <div class="row justify-content-between">
                                <div>
                                    <input type="text" wire:model="priceMin" placeholder="S/. 00.00"/>
                                </div>
                                <div>
                                    <input type="text" wire:model="priceMax" placeholder="S/. 00.00"/>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                @if(strlen($priceMin) !== 0 && strlen($priceMax) !== 0)
                                    <button class="btn-filter-belle">Aplicar precio</button>
                                @else
                                    <button class="btn-filter-belle_disabled" disabled>Aplicar precio </button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Price Filter-->
                <!--Size Swatches-->
                <div class="sidebar_widget filterBox filter-widget size-swacthes">
                    <div class="widget-title"><h2>Talla</h2></div>
                    <div class="filter-color swacth-list">
                        <ul>
                            <li><span class="swacth-btn checked">X</span></li>
                            <li><span class="swacth-btn">XL</span></li>
                            <li><span class="swacth-btn">XLL</span></li>
                            <li><span class="swacth-btn">M</span></li>
                            <li><span class="swacth-btn">L</span></li>
                            <li><span class="swacth-btn">S</span></li>
                            <li><span class="swacth-btn">XXXL</span></li>
                            <li><span class="swacth-btn">XXL</span></li>
                            <li><span class="swacth-btn">XS</span></li>
                        </ul>
                    </div>
                </div>
                <!--End Size Swatches-->
                <!--Color Swatches-->
                <div class="sidebar_widget filterBox filter-widget">
                    <div class="widget-title"><h2>Color</h2></div>
                    <div class="filter-color swacth-list clearfix">
                        <span class="swacth-btn black"></span>
                        <span class="swacth-btn white checked"></span>
                        <span class="swacth-btn red"></span>
                        <span class="swacth-btn blue"></span>
                        <span class="swacth-btn pink"></span>
                        <span class="swacth-btn gray"></span>
                        <span class="swacth-btn green"></span>
                        <span class="swacth-btn orange"></span>
                        <span class="swacth-btn yellow"></span>
                        <span class="swacth-btn blueviolet"></span>
                        <span class="swacth-btn brown"></span>
                        <span class="swacth-btn darkGoldenRod"></span>
                        <span class="swacth-btn darkGreen"></span>
                        <span class="swacth-btn darkRed"></span>
                        <span class="swacth-btn dimGrey"></span>
                        <span class="swacth-btn khaki"></span>
                    </div>
                </div>
                <!--End Color Swatches-->
                <!--Brand-->
                <div class="sidebar_widget filterBox filter-widget">
                    <div class="widget-title"><h2>Marca</h2></div>
                    <ul>
                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>Index</label>
                        </li>
                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>Zara</label>
                        </li>
                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>H&M</label>
                        </li>
                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>Pagini</label>
                        </li>
                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>Monark</label>
                        </li>
                    </ul>
                </div>
                <!--End Brand-->
            </div>
        </div>
        <!--End Sidebar-->
        <!--Main Content-->
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col shop-grid-5">
            <div class="productList">
                <!--Toolbar-->
                <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                    <img src="{{ asset('assets/images/grid.jpg') }}" alt="Grid" />
                                </a>
                                <a href="shop-listview.html" title="List View" class="change-view">
                                    <img src="{{ asset('assets/images/list.jpg') }}" alt="List" />
                                </a>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                <span class="filters-toolbar__product-count">Articulos: {{ count($products) }}</span>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 text-right">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Ordenar</label>
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                        <option value="title-ascending" selected="selected">Ordenar</option>
                                        <option>Ordenar, A-Z</option>
                                        <option>Ordenar, Z-A</option>
                                        <option>Precio de menor a mayor</option>
                                        <option>Precio de mayor a menor</option>
                                        <option>Fecha más reciente</option>
                                        <option>Fecha menos reciente</option>
                                    </select>
                                    <input class="collection-header__default-sort" type="hidden" value="manual">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Toolbar-->
                <div class="grid-products grid--view-items">
                    <div class="row">
                        @if( count($products) == 0)
                            <div class="col-12">
                                <div class="alert alert-warning text-center">
                                    <span>No se encontraron registros</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image1.jpg') }}" src="{{ asset('assets_belle/images/product-images/product-image26.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image1.jpg') }}" src="{{ asset('assets_belle/images/product-images/product-image26-1.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
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
                                        <a href="product.html">Edna Dress</a>
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



                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image2.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
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
                                        <a href="product.html">Babydoll Bow Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$313.60</span>
                                    </div>
                                    <!-- End product price -->

                                    <div class="product-review">
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image3.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
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
                                        <a href="product.html">Elastic Waist Dress</a>
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
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image4.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
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
                                        <a href="product.html">3/4 Sleeve Kimono Dress</a>
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
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image5.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image5.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image5.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image5.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
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
                                        <a href="product.html">Cape Dress</a>
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
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}" src="{{ asset('assets_belle/images/product-images/aproduct-image6.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
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
                                        <a href="product.html">Paper Dress</a>
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
                        @else
                            @foreach($products as $product)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{ route('product.details', ['slug'=> $product->id]) }}">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset( 'storage/'.$product->image )}}" src="{{ asset( 'storage/'.$product->image )}}" alt="image" title="product"/>
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset( 'storage/'.$product->image )}}" src="{{ asset( 'storage/'.$product->image )}}" alt="image" title="product"/>
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button">Comprar ahora</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
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
                                            <a href="product.html">{{ $product->name }}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">S/ {{ $product->price }}</span>
                                        </div>
                                        <div class="">
                                            <span class="">By: {{ $product->user->name }}</span>
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
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <div class="infinitpaginOuter">
                <div class="infinitpagin">
                    <a href="#" class="btn loadMore">Ver más</a>
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </div>

</main>
