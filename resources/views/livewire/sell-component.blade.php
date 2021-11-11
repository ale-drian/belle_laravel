<div>
    <!--Body Content-->
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center mt-5">
            <div class="page-title">
                <div class="wrapper">
                    <h1 class="page-width">Crear Producto</h1>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row">
                <div class="row col-md-7 pt-1">
                    <div class="col-12 col-sm-12">
                        <div class="mb-4 pt-4">
                            <form wire:submit.prevent="submitFormSell" id="CustomerLoginForm"
                                  class="contact-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ProductName">Nombre</label>
                                                <input type="text" wire:model="name" placeholder="" id="ProductName" class=""
                                                       autocorrect="off" autocapitalize="off" autofocus="">
                                                @error('name') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ProductBrand">Marca</label>
                                                <select wire:model="brand" id="ProductBrand" class="my-1 mr-sm-2">
                                                    <option selected>Seleccionar</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ProductSize">Talla</label>
                                                <select wire:model="size" id="ProductSize">
                                                    <option selected>Seleccionar</option>
                                                    @foreach($sizes as $size)
                                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('size') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ProductCategory">Categoria</label>
                                                <select wire:model="category" id="ProductCategory" class="my-1 mr-sm-2">
                                                    <option selected>Seleccionar</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ProductPrice">Precio</label>
                                                <input type="number" wire:model="price" placeholder="" id="ProductPrice" class=""
                                                       autocorrect="off" autocapitalize="off" autofocus="">
                                                @error('price') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ProductState">Estado</label>
                                                <select wire:model="state" id="ProductState" class="my-1 mr-sm-2">
                                                    <option selected>Seleccionar</option>
                                                    <option value="No disponible">No disponible</option>
                                                    <option value="Disponible">Disponible</option>
                                                </select>
                                                @error('state') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label  for="ProductImage">Escoger Imagen</label>

                                                <input type="file" wire:model="image"
                                                       class="form-control">
                                                <div wire:loading wire:target="image">
                                                    Subiendo...
                                                </div>

                                                @error('image') <span class="alert-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" class="btn mb-3" value="Crear Producto">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <span>Imagen: {{ $image }}</span>

                    @if($image)
                        <div>
                            <img src="{{ $image->temporaryUrl() }}">
                        </div>
                        {{-- <div class="row">
                            @foreach($image as $img)
                                <div class="col-3 card mb-1">
                                    <img src="{{ $img->temporaryUrl() }}">
                                </div>
                            @endforeach
                        </div> --}}
                    @endif
                    <div class="h-100 bg-placeholder-image shadow-sm flex align-items-center justify-content-center">

                        <div>
                        <span class="text-size-image">
                          Cargando imagen...
                        </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--End Body Content-->

</div>
