@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Aprendices</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('aprendice.update', $aprendice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre del Aprendiz</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $aprendice->name) }}" required placeholder="">

                    </div>

                    <div class="mb-3">

                        <label for="email" class="form-label">Email del Aprendiz</label>
                        <input type="text"name="email"id="email"value="{{ old('email', $aprendice->email) }}" required placeholder="">

                    </div>

                    <div class="mb-3">

                        <label for="cell_number" class="form-label">Cell number del Aprendiz</label>
                        <input type="text"name="cell_number"id="cell_number"value="{{ old('cell_number', $aprendice->cell_number) }}" required placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Aprendiz
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
