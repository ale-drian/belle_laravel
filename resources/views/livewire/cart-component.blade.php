<main id="main" class="main-site">
    @php
        // SDK de Mercado Pago
        require base_path('/vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();
    @endphp
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">inicio</a></li>
                <li class="item-link"><span>Bolsa</span></li>
            </ul>
        </div>
        <!-- <div class=" main-content-area">  -->
            <!--Body Content-->  
    <div id="page-content">
    	<!--Page Title-->
        <!--End Page Title-->
    
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Producto</th>
                                    <th class="text-right">Precio</th>
                                    <th class="text-center"></th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @php
                                    $total = 0;
                                    $sub_total = 0;
                                    $igv = 0
                                @endphp
                                @if(count($products_cart) <= 0)
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td colspan="5" class="cart__image-wrapper cart-flex-item" style="text-align: center;">
                                            No hay productos
                                        </td>
                                    </tr>
                                @else
                                    @foreach($products_cart as $prod)
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="{{ route('product.details', ['slug'=> $prod->product->id]) }}"><img class="cart__image" src="{{ asset( 'storage/'.$prod->product->image )}}" alt="{{$prod->product->name}}"></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="{{ route('product.details', ['slug'=> $prod->product->id]) }}">{{$prod->product->name}}</a>
                                            </div>
                                            
                                            <div class="cart__meta-text">
                                                @if($prod->product->category->category_idcategory == null)
                                                    Categoría:  {{ $prod->product->category->name }}</br>
                                                @else
                                                    Categoría:  {{ $prod->product->category->category->name }}</br>
                                                    Sub Categoría: {{ $prod->product->category->name }}</br>
                                                @endif
                                                Talla: {{ $prod->product->size->name }}<br>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">S/ {{$prod->price_unit}}</span></div>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                        </td>
                                        <td class="text-center small--hide"><a wire:click="destroyCart({{ $prod->id }})" class="btn btn--secondary cart__remove" style="background: #2da4a5 !important; color: white !important" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                    </tr>
                                        @php
                                            $total += $prod->price_unit;
                                            // Crea un ítem en la preferencia
                                            $item = new MercadoPago\Item();
                                            $item->title = $prod->product->name;
                                            $item->quantity = 1;
                                            $item->unit_price = $prod->price_unit;
                                            $products[] = $item
                                        @endphp
                                    @endforeach
                                    @php
                                        $sub_total = round($total/1.18,2);
                                        $igv=$total - $sub_total;
                                        $preference->items = $products;
                                        //return
                                        $preference->back_urls = array(
                                            "success" => route('checkout'),
                                            "failure" => route('product.cart'),
                                            "pending" => route('product.cart'),
                                        );
                                        $preference->auto_return = "approved";
                                        $preference->save();
                                    @endphp
                                @endif
                                
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{ url('/category') }}" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continuar comprando</a></td>
                                </tr>
                            </tfoot>
                    </table>
                                        
                    </form>                   
               	</div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                    <div class="solid-border">
                      <div class="row">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" style="font-weight: 500 !important;">S/ {{number_format($sub_total, 2, '.', '')}}</span></span>
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>IGV</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" style="font-weight: 500 !important;">S/ {{number_format($igv, 2, '.', '')}}</span></span>
                    </div>
                    <hr/>
                    <div class="row">
                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Total</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" style="font-weight: 500 !important;">S/ {{number_format($total, 2, '.', '')}}</span></span> 
                    </div>
                    
                    <hr/>
                      <p class="cart_tearm">
                        <label style="font-weight: 200 !important;">
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="" style="display: inline; margin: 0px;">
                           Acepto los terminos y condiciones</label>
                      </p>
                      <div class="cho-container btn" style="width: 100%;">
                          <!-- <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="PAGAR" > -->
                      </div>
                      <!-- <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="PAGAR" disabled="disabled"> -->
                      <div class="paymnet-img"><img src="{{asset('assets_belle/images/mercadopago.png')}}" alt="Payment"></div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->           
          
    </div>
    <!--end container-->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
                locale: 'es-AR'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                    container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                    label: 'Pagar', // Cambia el texto del botón de pago (opcional)
            }
        });
    </script>
</main>