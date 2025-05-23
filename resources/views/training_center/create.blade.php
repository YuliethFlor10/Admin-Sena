@extends('layouts.app')

@section('content')
<h1>Fromulario Training</h1>

<br>

<form action="{{route('training.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="title">Name:</label>

        <input type="text" id="name" name="name" >

        <br>

        <label for="title">Location:</label>

        <input type="text" id="location" name="location" >

        <br>



    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>
@endsection
