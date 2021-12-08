<main id="main">
<div class="site-cart">
<a href="{{ url('/cart') }}" class="site-header__cart" title="Cart">
    <i class="icon anm anm-bag-l"></i>
    @if(Auth::user())
    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{count($products_cart)}}</span>
    @endif
</a>

<!--Minicart Popup-->
<div id="header-cart" class="block block-cart">
    @if(Auth::user())
    <ul class="mini-products-list" id="products_list">
        <?php $total = 0; ?>
        @foreach($products_cart as $prod)
            <?php $total+=($prod->product->price*$prod->product_count); ?> 
            <li class="item">
                <a class="product-image" href="#">
                    <img src="{{ asset( 'storage/'.$prod->product->image )}}" alt="{{$prod->product->name}}" title="" />
                </a>
                <div class="product-details">
                    <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                    <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                    <a class="pName" href="cart.html">{{$prod->product->name}}</a>
                    <div class="variant-cart">Talla: {{$prod->product->size->name}}</div>
                    <div class="wrapQtyBtn">
                        <div class="qtyField">
                            <span class="label">Qty:</span>
                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                            <input type="text" id="Quantity" name="quantity" value="{{$prod->product_count}}" class="product-form__input qty">
                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="priceRow">
                        <div class="product-price">
                            <span class="money">S/. {{$prod->product->price}}</span>
                        </div>
                        </div>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="total">
        <div class="total-in">
            <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">S/. {{number_format($total, 2, '.', '')}}</span></span>
        </div>
        <div class="buttonSet text-center">
            <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
            <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
        </div>
    </div>
    @else
        <div class="buttonSet text-center">
            <br/>
            <br/>
            <p>Para agregar productos</p> <p>debe iniciar sesion</p>
            <br/>
            <a href="cart.html" class="btn btn-secondary btn--small">Loogin</a>
            <br/>
            <br/>
        </div>
    @endif
</div>
</div>
<script>
    console.log("holi")
</script>
                        <!--End Minicart Popup-->
</main>
