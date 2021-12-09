<main id="main" class="main-site container">
    <!--Sidebar-->
    <div class="row pt-5" style="min-height: 60vh !important;">
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 sidebar filterbar">
            <div class="section-datauser flex ">
                <div class="datauser-container__img">
                    <img src="{{ $user->profile_photo_path == '' ? $user->profile_photo_url: asset( 'storage/'.$user->profile_photo_path ) }}" alt="">
                </div>

                <div class="datauser-container__text">
                    <span class="text-name">
                        {{ $user->name }} {{ $user->lastname }}
                    </span>
                    <span class="text-phone">
                        <strong>Telefono:</strong> {{ $user->phone }}
                    </span>
                    <span class="text-email">
                        <strong>Email:</strong> {{ $user->email }}
                    </span>
                </div>
            </div>
            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
            <div class="sidebar_tags">
                <!--Categories-->


                <div class="sidebar_widget filterBox filter-widget">
                    <div class="widget-title"><h2>Comentarios ({{ count($comments) }})</h2></div>
                    <div class="widget-content">

                        <div class="section-comment ">
                            <div class="container-comment mt-2">

                                <div class="comment_user">
                                    <img src="{{ Auth::user()->profile_photo_path == '' ? Auth::user()->profile_photo_url: asset( 'storage/'.Auth::user()->profile_photo_path ) }}" alt="">
                                </div>
                                <div class="comment-textarea">
                                    <b>Calificación</b>
                                    <br/>
                                    <p class="clasificacion">
                                        <input wire:model="commentStar" id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>
                                        <input wire:model="commentStar" id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>
                                        <input wire:model="commentStar" id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>
                                        <input wire:model="commentStar" id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>
                                        <input wire:model="commentStar" id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </p>
                                    <br/>
                                    <b>Comentario</b>
                                    <br/>
                                            <textarea name=""
                                                      id=""
                                                      wire:model="contentComment"
                                                      class="comment-textarea__input"
                                                      cols="20" rows="1"></textarea>
                                    <br/>
                                    <div class="comment-btn">
                                        <button class="btn" wire:click="submitComment">Enviar</button>
                                    </div>
                                </div>
                            </div>

                           <div class="comments-users">
                               @foreach($comments as  $comment)
                                   <div class="container-comments">
                                       <div class="container-comment__user">
                                           <span>{{ $comment->userComment->name }}</span>
                                       </div>
                                        <p class="rate_coment">
                                            <label class="rate">({{$comment->star}})</ class="rate">
                                            @for ($i = 5; $i > 0; $i--)
                                                @if($i <= $comment->star)
                                                    <label class="star_yellow">★</label>
                                                @else
                                                    <label class="star_blue">★</label>
                                                @endif
                                            @endfor
                                        </p>
                                       <div class="container-comment__content">
                                           <p>{{ $comment->content }}</p>
                                           
                                            {{ \Carbon\Carbon::parse($comment->publication_date)->diffForHumans() }}
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 main-col shop-grid-5 shadow ">
            <div class="productList mt-4">
                <!--Toolbar-->
                <h1>Productos ({{ count($products) }})</h1>
                <!--End Toolbar-->
                <div class="grid-products grid--view-items">
                    <div class="row">
                        @if( count($products) == 0)
                            <div class="col-12">
                                <div class="alert alert-warning text-center h-100">
                                    <span>Aun no tiene productos</span>
                                </div>
                            </div>
                        @else
                            @foreach($products as $product)
                                <div class="product-public">
                                    <div class="product-image-public">
                                        <a href="#">
                                            <img class="primary blur-up lazyload" data-src="{{ asset( 'storage/'.$product->image ) }}" src="{{ asset( 'storage/'.$product->image )}}" alt="image" title="product"/>
                                                                                   </a>
                                    </div>

                                    <div class="product-details-public">
                                        <div class="product-name">
                                            <span>{{ $product->name }}</span>
                                        </div>
                                        <div class="product-category">
                                            <span>{{ $product->category->name }}</span>
                                        </div>
                                        <div class="flex justify-content-between">
                                            <div class="product-price">
                                                <span class="price">S/ {{ $product->price }}</span>
                                            </div>
                                            <div>
                                                <span>{{ $product->updated_at }} </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
