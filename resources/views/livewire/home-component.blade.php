<main id="main">
    <div class="container">

    <!--Body Content-->
    <div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('assets_belle/images/fondo1.png') }}" src="{{ asset('assets_belle/images/fondo1.png') }}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">OFERTAS!!!</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Miles de articulos con 50% de Descuento</span>
                                        <span class="btn">Comprar ahora</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('assets_belle/images/fondo2.png') }}" src="{{ asset('assets_belle/images/fondo2.png') }}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">MODA CIRCULAR</h2>
                                        <span class="mega-subtitle slideshow__subtitle">La ropa merece una segunda oportunidad</span>
                                        <span class="mega-subtitle slideshow__subtitle">Tu ex, NO!</span>
                                        <span class="btn">Comprar ahora</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        <!--Weekly Bestseller-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Encuentra miles de productos</h2>
                            <p>En todas las categorias</p>
                        </div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--Weekly Bestseller-->
                <!--Collection Tab slider-->
        
        <!--Collection Box slider-->
        <div class="collection-box section">
        	<div class="container-fluid">
				<div class="collection-grid">
                        <div class="collection-grid-item">
                            <a href="{{ route('category.name',['category_id'=>1 ]) }}" class="collection-grid-item__link">
                                <img data-src="{{ asset('assets_belle/images/collection/fashion.jpg') }}" src="{{ asset('assets_belle/images/collection/fashion.jpg') }}" alt="Fashion" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border" style="color:white !important;"><a href="{{ route('category.name',['category_id'=>1 ]) }}" >Ropa</a></h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="{{ route('category.name',['category_id'=>26 ]) }}" class="collection-grid-item__link">
                                <img data-src="{{ asset('assets_belle/images/collection/bag.jpg') }}" src="{{ asset('assets_belle/images/collection/bag.jpg') }}" alt="Bag" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border" style="color:white !important;"><a href="{{ route('category.name',['category_id'=>26 ]) }}" >Carteras</a></h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{ route('category.name',['category_id'=>27 ]) }}" class="collection-grid-item__link">
                                <img data-src="{{ asset('assets_belle/images/collection/accessories.jpg') }}" src="{{ asset('assets_belle/images/collection/accessories.jpg') }}" alt="Accessories" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border" style="color:white !important;"><a href="{{ route('category.name',['category_id'=>27 ]) }}" >Accesorios</a></h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{ route('category.name',['category_id'=>22 ]) }}" class="collection-grid-item__link">
                                <img data-src="{{ asset('assets_belle/images/collection/shoes.jpg') }}" src="{{ asset('assets_belle/images/collection/shoes.jpg') }}" alt="Shoes" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border" style="color:white !important;"><a href="{{ route('category.name',['category_id'=>22 ]) }}" >Zapatos</a></h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{ route('category.name',['category_id'=>18 ]) }}" class="collection-grid-item__link">
                                <img data-src="{{ asset('assets_belle/images/collection/jewellry.jpg') }}" src="{{ asset('assets_belle/images/collection/jewellry.jpg') }}" alt="Jewellry" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border" style="color:white !important;"><a href="{{ route('category.name',['category_id'=>18 ]) }}" >Joyeria</a></h3>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        
    </div>
    <!--End Logo Slider-->
        
        
    </div>
    <!--End Body Content-->

    </div>

</main>