@extends('layouts.master')
@section('content')
<table border="1px">
    <thead>
        <tr>
            <td>ID</td>
            <td>First name</td>
            <td>Last name</td>
            <td>Gender</td>
            <td>Qualifications</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($cruds as $crud)
        <tr>
            <td>{{$crud->id}}</td>
            <td>{{$crud->first_name}}</td>
            <td>{{$crud->last_name}}</td>
            <td>{{$crud->gender}}</td>
            <td>{{$crud->qualification}}</td>
            <td>
                <form action="destroy/{{$crud->id}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            <td>
                <form action="edit/{{$crud->id}}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-danger">Edit</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endSection