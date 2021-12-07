<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <div id="form-search-top" name="form-search-top">
            <input type="text" wire:model="search" class="inputSearch" value="{{ $search }}" placeholder="Buscar ...">
            <ul class="list_ul">
                @foreach($productos as $producto)
                    <li><a href="{{route('product.details',['slug'=>$producto->id])}}">
                           {{ $producto->name }}
                        </a></li>
                @endforeach
            </ul>
            <div class="wrap-list-cate">
                <select wire:model="category" id="" class="">
                    <option selected class="level-0">Seleccionar</option>
                    @foreach($categories as $category)
                        <option value="{{$category}}" class="level-1">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
