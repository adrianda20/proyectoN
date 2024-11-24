@extends('layouts.layout')
@section('title', 'Listado de productos')
@section('content')
    <div class="row text-center">
        <h1>Productos</h1>
    </div>
    <div class="row justify-content-end">
        <div class="col-3">
            <a class="button" class="btn btn-primary" href ="{{ route('producto.create') }}">Crear producto</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    $@foreach ($productos as $producto)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn btn-primary" href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('producto.delete', $producto->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button typ= "submit" class="btn btn-secondary"
                                            onclick="return confirm(¿'Seguro que desea eliminar el registro?')">
                                            Eliminar</button>
                                        </form>
                                    </div>
                                </div>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
