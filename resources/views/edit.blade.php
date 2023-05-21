@extends('layouts.master')
@section('content')
<form action="update/{{$crud->id}}" method="post">
    @csrf
    <div class="form-group">
        <label for="first_name">First Name:</label><br><br>
        <input type="text" class="form-control" name="first_name" value={{$crud->first_name}}><br><br>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label><br><br>
        <input type="text" class="form-control" name="last_name" value={{$crud->last_name}}><br><br>
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label><br><br>
        <input type="text" class="form-control" name="gender" value={{$crud->gender}}><br><br>
    </div>
    <div class="form-group">
        <label for="qualification">Qualifications:</label><br><br>
        <input type="text" class="form-control" name="qualification" value={{$crud->qualification}}><br><br>
    </div>
    <button type="submit" class="btn-btn">Update</button>
</form>