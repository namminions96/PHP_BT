
@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>
    <form action="/students" method="post">
        @csrf
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br>

        <label for="age">age:</label>
        <input type="number" id="age" name="age"  required><br>

        <label for="address">address</label>
        <input type="text" id="address" name="address" required><br>

        <label for="telephone">telephone:</label>
        <input type="text" id="telephone" name="telephone" required><br>

        <button type="submit">Add New Student</button>
    </form>
@endsection
