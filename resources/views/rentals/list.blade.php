@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="{{route('rentals/show')}}" method="post" novalidate class="form-inline">
                @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" namme="name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <a href="{{route('rentals.index')}}" class="btn btn-primary">Todo</a>
                        <a href="{{route('rentals.create')}}" class="btn btn-primary">Crear</a>
                    </div>
                </form>
            </article>

            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                            <th>Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rentals as $rentals)
                        <tr>
                            <td>{{$rentals->start_date}}</td>
                            <td>{{$rentals->end_date}}</td>
                            <td>{{$rentals->total}}<td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('rentals.edit',['id' => $rentals->id]) }}">Editar</a>
                                <a class="btn btn-danger btn-xs" href="{{route('rentals/destroy',['id' => $rentals->id]) }}">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection