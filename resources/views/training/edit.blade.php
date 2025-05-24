@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Training</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('training.update', $training->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre del Aprendiz</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $training->name) }}" required placeholder="">

                    </div>

                    <div class="mb-3">

                        <label for="location" class="form-label">Email del Aprendiz</label>
                        <input type="text"name="location"id="location"value="{{ old('location', $training->location) }}" required placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Training
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
