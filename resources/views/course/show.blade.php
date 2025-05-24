@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Cursos</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">Course number</th>
                    <th scope="col">Day</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['date'] }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
