@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Teacher</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre del instructor</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $teacher->name) }}" required placeholder="">

                    </div>

                    <div class="mb-3">

                        <label for="email" class="form-label">Email del instructor</label>
                        <input type="text"name="email"id="email"value="{{ old('email', $teacher->email) }}" required placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Teacher
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
