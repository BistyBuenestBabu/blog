@extends('layout')
@section('content')

<div style="margin:auto; width: 500px; border:2px solid #143774; padding:20px; margin-bottom:50px;">
<h1 style="color:#1792d2">Add new post</h1>
<hr>
<form action="save" method="post">
@csrf  
<label for="ftitle">Title:</label><br>
  <input type="text" placeholder="enter the title" name="title">
  @error('title')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div>
@enderror
 <br>
  <label for="fdescription">Description:</label><br>
  <textarea type="text" placeholder="enter the description" name="description"></textarea>
  @error('description')
    <div class="alert alert-danger" style="color:red">{{ $message }}</div>
@enderror<br><br>
  <input type="submit" value="Submit">
</form> 
</div>
        @endsection