@extends('layouts.app')

@section('content')
<h1>Fromulario Computers</h1>

<br>

<form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="title">Number:</label>

        <input type="number" id="Number" name="Number" >

        <br><br>

        <label for="title">Brand:</label>

        <input type="text" id="Brand" name="Brand" >
<br><br>

    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>
@endsection
