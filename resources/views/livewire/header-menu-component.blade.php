<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
    <ul id="siteNav" class="site-nav medium center hidearrow">
        <li class="lvl1 parent megamenu"><a href="{{ url('/') }}">Inicio<i class="anm anm-angle-down-l"></i></a></li>
        <li class="lvl1 parent megamenu"><a href="{{ url('/category') }}">Categorias <i class="anm anm-angle-down-l"></i></a>
            <div class="megamenu style4">
                <ul class="grid grid--uniform mmWrapper">
                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Categorias</a>
                        <ul class="subLinks">
                            @foreach ($categories as $category)
                                <li class="lvl-2"><a href="{{ route('category.name',['category_id' => $category->id ]) }}" class="site-nav lvl-2">{{ $category->name}}</a></li>
                            @endforeach
                            <li class="lvl-2"><a href="#" class="site-nav lvl-2">Todo</a></li>
                        </ul>
                    </li>
                    <li class="grid__item lvl-1 col-md-5 col-lg-5">
                        <a href="#"><img src="{{asset('assets_belle/images/megamenu-bg1.jpg')}}" alt="" title="" /></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="lvl1 parent megamenu"><a href="{{ url('/sell') }}">Vender <i class="anm anm-angle-down-l"></i></a></li>
    <li class="lvl1"><a href="{{ url('/contact-us') }}"><b>Contactanos</b> <i class="anm anm-angle-down-l"></i></a></li>
    <li class="lvl1"><a href="{{ url('/about-us') }}"><b>Acerca de Nosotros</b> <i class="anm anm-angle-down-l"></i></a></li>
    </ul>
</nav>
