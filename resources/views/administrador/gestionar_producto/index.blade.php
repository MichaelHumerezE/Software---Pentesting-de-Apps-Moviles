@extends('administrador.admin')

@section('content')
    <!-- ****************************************************-->
    @yield('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <h2>
                            <center><b>PRODUCTOS</b></center>
                        </h2>
                        <a href="{{ url('administrador/producto/create') }}" class="btn btn-primary float-end">Nuevo
                            Producto</a>
                        <a href="{{ url('administrador/notaBaja') }}" class="btn btn-primary me-md-6"><i
                                class="fa fa-book-open"></i> Dar De Baja</a>
                        <a href="{{ route('reportes.producto', 'pdf') }}" class="btn btn-info">
                            Reporte PDF <i class="fa fa-file"></i></a>
                        <a href="{{ route('reportes.producto', 'csv') }}" class="btn btn-info">
                            Reporte CSV <i class="fa fa-file"></i></a>
                        <a href="{{ route('reportes.producto', 'xlsx') }}" class="btn btn-info">
                            Reporte XLSX <i class="fa fa-file-excel"></i></a>
                    </h4>
                </div>
                <div class="pagination justify-content-end">
                    {!! $productos->links() !!}
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->name }}</td>
                                <td><img src="{{ asset('public/img/' . $producto->imagen) }}" alt="Producto" width="150"></td>
                                <td>{{ $producto->precioUnitario }} Bs</td>
                                @foreach ($marcas as $marca)
                                    @if ($marca->id == $producto->idmarca)
                                        <td>{{ $marca->nombre }}</td>
                                    @endif
                                @endforeach
                                @foreach ($categorias as $categoria)
                                    @if ($categoria->id == $producto->idcategoria)
                                        <td>{{ $categoria->nombre }}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('administrador/producto/' . $producto->id . '/edit') }}"
                                            class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger" form="delete_{{ $producto->id }}"
                                            onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form action="{{ route('producto.destroy', $producto->id) }}"
                                            id="delete_{{ $producto->id }}" method="POST" enctype="multipart/form-data"
                                            hidden>
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-end">
                    {!! $productos->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
