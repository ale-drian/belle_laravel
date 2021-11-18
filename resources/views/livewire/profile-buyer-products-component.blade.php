<main id="main" class="main-site container">
    <!--Sidebar-->
    <div class="row pt-5">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
            <div class="sidebar_tags">
                <!--Categories-->
                <div class="sidebar_widget categories filter-widget">
                    <div class="widget-title"><h2>Perfil</h2></div>
                    <div class="widget-content">
                        <ul class="sidebar_categories">
                            <li class="level1">
                                <a href="{{ route('profile') }}" class="site-nav">Configuración</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile') }}" class="site-nav">Productos Vendidos</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile') }}" class="site-nav">Productos Comprados</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile') }}" class="site-nav">Carrito</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                                    <span>Aun no tiene productos</span>
                                </div>
                            </div>
                        @else
                            @foreach($products as $product)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
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
        </div>
</main>