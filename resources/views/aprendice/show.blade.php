@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Aprendices</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cell number</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $aprendice['name'] }}</td>
                    <td>{{ $aprendice['email'] }}</td>
                    <td>{{ $aprendice['cell_number'] }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
