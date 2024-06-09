@extends('layout.private')

@section('container')

    <div class="section-add">
      <h2>Form Edit Data Home</h2>
      <form class="form-add" method="POST" action="{{ route('editDataHome.update', $data->id) }}">
        @csrf
        <input type="text" placeholder="Enter Name" name="name" value="{{$data->name}}" required />

        <input type="text" placeholder="Enter Greeting" name="greeting" value="{{$data->greeting}}" required />

        <input type="text" placeholder="Enter Description" name="description" value="{{$data->description}}" required />

        <button type="submit" class="submit">Update</button>

        <div class="container" style="background-color: #f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  
@endsection