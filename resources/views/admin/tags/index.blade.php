@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    @can('admin.tags.create')
        <a href="{{route('admin.tags.create')}}" class="btn btn-secondary btn-sm float-right">Nueva etiqueta</a>
    @endcan
    <h1>Mostrar listado de etiquetas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
