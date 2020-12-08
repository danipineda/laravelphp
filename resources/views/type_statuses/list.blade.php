@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="{{route('type_statuses/show')}}" method="post" novalidate class="form-inline">
                @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" namme="name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <a href="{{route('type_statuses.index')}}" class="btn btn-primary">Todo</a>
                        <a href="{{route('type_statuses.create')}}" class="btn btn-primary">Crear</a>
                    </div>
                </form>
            </article>

            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($type_statuses as $type_statuses)
                        <tr>
                            <td>{{$type_statuses->name}}</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('type_statuses.edit',['id' => $type_statuses->id]) }}">Editar</a>
                                <a class="btn btn-danger btn-xs" href="{{route('type_statuses/destroy',['id' => $type_statuses->id]) }}">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection