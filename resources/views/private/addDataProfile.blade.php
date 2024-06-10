@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Add Data Profile</h2>

  <form class="form-add" method="POST" action="{{ route('profilePrivate.store') }}" enctype="multipart/form-data">
    @csrf

    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter Title" name="title" required />

    <label for="biodata"><b>Biodata</b></label>
    <input type="text" placeholder="Enter Biodata" name="biodata" required />

    <div class="form-group">
      <label for="image"><b>Image</b></label>
      <input type="file" placeholder="Enter Image" name="image" id="image" required />
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
