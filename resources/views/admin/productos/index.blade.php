@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-data m-b-30">
                        @if(session()->has('status'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                {{Session::get('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <h3 class="title-3 m-b-30">
                            <i class="fas fa-archive"></i>Productos
                            <span class="float-right">
                                <a class="btn btn-outline-primary" href="{{ route('admin.productos.crear') }}"><i class="fa fa-plus"></i> Crear</a>
                            </span>
                        </h3>

                        @if(count($productos) > 0)
                            <div class="table-responsive table-data">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <td>#<td
                                            <td>Producto</td>
                                            <td>Precio</td>
                                            <td>Cantidad</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productos as $producto)
                                            <tr>
                                                <td>{{$producto->id}}</td>
                                                <td>{{$producto->name}}</td>
                                                <td>{{'€'.number_format($producto->price, 3, ',', '.') }}  </td>
                                                <td>{{number_format($producto->amount, 0, ',', '.') }}  </td>
                                                <td>
                                                    <a class="btn btn-outline-success" href="{{route('admin.productos.editar', $producto->id)}}"><i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="col-lg-12">
                                <div class="alert alert-danger" role="alert">
                                    Aún no hay productos en la base
                                </div>
                            </div>
                        @endif
                        <div class="user-data__footer">
                            {{-- {{$inscricoes->render()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('admin.layouts.footer')
