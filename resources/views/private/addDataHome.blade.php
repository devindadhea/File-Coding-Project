@extends('layout.private')

@section('container')
    
<div class="section-add">
    <h2>Form Add Data Home</h2>

    <form class="form-add" method="POST" action="{{ route('homePrivate.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required />
      </div>


      <div class="form-group">
        <label for="psw"><b>Greeting</b></label>
        <input type="text" placeholder="Enter Greeting" name="greeting" required /> 
      </div>

      <div class="form-group">
        <label for="description"><b>Description</b></label>
        <input type="text" placeholder="Enter Description" name="description" required></input>
      </div>

      <div class="form-group">
        <label for="image"><b>Image</b></label>
        <input type="file" placeholder="Enter Image" name="image" id="image"  required />
        @error('image')
        <small>{{ $message }}</small>
        @enderror
      </div>
        <button type="submit" class="submit">Submit</button>
      

      <div class="container" style="background-color: #f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
    @endsection