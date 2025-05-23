@extends('layouts.app')

@section('content')
<h1>Fromulario Aprendices</h1>

<br>

<form action="{{route('aprendice.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="title">Name:</label>
        <input type="text" id="name" name="name" >

        <br><br>

        <label for="title">Email:</label>
        <input type="text" id="email" name="email" >

        <br><br>

        <label for="title">Cell number:</label>
        <input type="number" id="cell_number" name="cell_number" > <br><br>



    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>
@endsection

