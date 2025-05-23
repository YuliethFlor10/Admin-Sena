@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de computer</h1>

        <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Brand</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer['brand'] }}</td>
                        <td>{{ $computer['number'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
