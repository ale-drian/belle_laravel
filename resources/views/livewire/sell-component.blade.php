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
                            <form method="post" action="#" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ProductName">Nombre</label>
                                                <input type="text" name="product[name]" placeholder="" id="ProductName" class=""
                                                       autocorrect="off" autocapitalize="off" autofocus="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ProductMark">Marca</label>
                                                <input type="text" name="product[mark]" placeholder="" id="ProductMark" class=""
                                                       autocorrect="off" autocapitalize="off" autofocus="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ProductSize">Talla</label>
                                                <input type="text" name="product[size]" placeholder="" id="ProductSize" class=""
                                                       autocorrect="off" autocapitalize="off" autofocus="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ProductCategory">Categoria</label>
                                                <select name="product[category]" id="ProductCategory" class="my-1 mr-sm-2">
                                                    <option selected>Seleccionar</option>
                                                    <option value="joyeria">Joyeria</option>
                                                    <option value="zapatos">Zapatos</option>
                                                    <option value="carteras">Carteras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ProductPrice">Precio</label>
                                                <input type="number" name="product[price]" placeholder="" id="ProductPrice" class=""
                                                       autocorrect="off" autocapitalize="off" autofocus="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ProductState">Estado</label>
                                                <select name="product[state]" id="ProductState" class="my-1 mr-sm-2">
                                                    <option selected>Seleccionar</option>
                                                    <option value="0">No disponible</option>
                                                    <option value="1">Disponible</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input type="file" class="custom-file-input" id="ProductImage" />
                                                <label class="custom-file-label" for="ProductImage">Escoger Imagen</label>
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
