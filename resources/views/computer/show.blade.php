@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Computadores</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Number</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $computer['brand'] }}</td>
                    <td>{{ $computer['number'] }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
