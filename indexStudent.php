
@extends('layouts.app')

@section('content')
    <h1>List product</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Student</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end" >
                        ADD
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>age</th>
                            <th>address</th>
                            <th>telephone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($student as $students)
                            <tr>
                                <td>{{ $students->Name }}</td>
                                <td>{{ $students->age }}</td>
                                <td>{{ $students->address }}</td>
                                <td>{{ $students->telephone }}</td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
