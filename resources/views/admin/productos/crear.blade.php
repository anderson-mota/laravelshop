@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">{{( !isset($producto->name)) ? ("Nuevo Producto") : ($producto->name)}}</div>
                        <div class="card-body">
                            @if(!isset($productos))
                                <form action="{{route('admin.productos.grabar')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                            @else
                                <form action="{{route('admin.productos.cambiar', $producto->id)}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                            @endif

                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Nombre</label>
                                    <input id="name" name="nombre" type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="price" class="control-label mb-1">Precio</label>
                                            <div class="input-group">
                                                <input id="price" name="price" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="amount" class="control-label mb-1">Cantidad</label>
                                        <div class="input-group">
                                            <input id="amount" name="amount" type="number" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <label for="categoria" class="control-label mb-1">Categoria</label>
                                        <div class="input-group">
                                            <select name="categoria" id="categoria" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="control-label mb-1">Descripción</label>
                                    <textarea name="description" id="description" rows="9" class="form-control summernote"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-success browse-btn">
                                                <i class="fa fa-file"></i> Imagenes
                                            </button>
                                        </div>
                                        <div>
                                            <input type="file" id="real-input" name="imagenes[]" multiple="multiple" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group upload-return">
                                </div>

                                <div class="mt-5">
                                    <button type="submit" class="btn btn-primary float-left">Grabar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
