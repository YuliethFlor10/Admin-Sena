@extends('layouts.app')

@section('content')
<h1>Fromulario Courses</h1>

<br>

<form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="title">Course number:</label>
        <input type="number" id="course_number" name="course_number" >

        <br><br>

        <label for="title">Day:</label>
        <input type="date" id="day" name="day" >

<br><br>
    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>
@endsection
