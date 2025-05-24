@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de area</h1>

        <a href="{{ route('area.create') }}" class="btn btn-warning btn-sm mb-4">Crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area['name'] }}</td>

                    <td>
                            <a href="{{ route('area.show', $area['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                        <td><a href="{{ route('area.edit', $area->id) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                        <form action="{{ route('area.destroy', $area->id) }}" method="POST">
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
