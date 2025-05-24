@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Centros de entrenamiento</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>Name</th>
                    <th>Location</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $training['name'] }}</td>
                        <td>{{ $training['location'] }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
