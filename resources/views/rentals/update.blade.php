@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('rentals/update', ['id' => $rentals->id])}}" method="post" novalidate>
                    @csrf 
                    <div class="form-group">
                        <label>Fecha inicio</label>
                        <input type="date" name="start_date" class="form-control" required value="{{$rentals->start_date}}">
                    </div>
                    <div class="form-group">
                        <label>Fecha fin</label>
                        <input type="text" name="end_date" class="form-control" required value="{{$rentals->end_date}}">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="text" name="total" class="form-control" required value="{{$rentals->total}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Envíar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection