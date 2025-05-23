@extends('layouts.app')

@section('content')
<h1>Fromulario Teachers</h1>

<br>

<form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="title">Name:</label>
        <input type="text" id="name" name="name" >

        <br>

        <label for="title">Email:</label>
        <input type="text" id="email" name="email" >


    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>
@endsection
