@extends('layouts.master')
@section('content')
<form action="biodata" method="post">
    @csrf
    <div class="form-group">
        <label for="first_name">First Name:</label><br><br>
        <input type="text" class="form-control" name="first_name"><br><br>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label><br><br>
        <input type="text" class="form-control" name="last_name"><br><br>
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label><br><br>
        <input type="text" class="form-control" name="gender"><br><br>
    </div>
    <div class="form-group">
        <label for="qualification">Qualifications:</label><br><br>
        <input type="text" class="form-control" name="qualification"><br><br>
    </div>
    <button type="submit" class="btn-btn">Insert</button>
</form>
@endSection