@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Edit Data Home</h2>
  <form class="form-add" method="POST" action="{{ route('editDataHome.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Enter Name" name="name" value="{{$data->name}}" required />

    <input type="text" placeholder="Enter Greeting" name="greeting" value="{{$data->greeting}}" required />

    <input type="text" placeholder="Enter Description" name="description" value="{{$data->description}}" required />

    <div class="update-image">
      <input type="hidden" name="oldImage" value="{{ $data->image}}" />
      <img style="max-height: 100px; display: block; margin-bottom: 10px" src="{{ asset('storage/'.$data-> image) }}" alt="home-image" />

      <input type="file" placeholder="Enter Image" name="image" value="{{$data->image}}" required />
      @error('image')
      <small>
        {{ $message }}
      </small>
      @enderror
    </div>

    <!-- <div class="form-group">
      <label for="image"><b>Image</b></label>
      <input type="file" placeholder="Enter Image" name="image" id="image"  required />
      @error('image')
      <small>{{ $message }}</small>
      @enderror
    </div> -->

    <button type="submit" class="submit">Update</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

@endsection
