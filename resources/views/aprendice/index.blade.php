@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de aprendices</h1>

        <a href="{{ route('aprendice.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cell number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aprendices as $aprendice)
                    <tr>
                        <td>{{ $aprendice['name'] }}</td>
                        <td>{{ $aprendice['email'] }}</td>
                        <td>{{ $aprendice['cell_number'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
