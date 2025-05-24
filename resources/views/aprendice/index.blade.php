@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de aprendices</h1>

        <a href="{{ route('aprendice.create') }}" class="btn btn-warning btn-sm mb-4">Crear</a>

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

                        <td>
                            <a href="{{ route('aprendice.show', $aprendice['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                        <td><a href="{{ route('aprendice.edit', $aprendice->id) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                        <form action="{{ route('aprendice.destroy', $aprendice->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
