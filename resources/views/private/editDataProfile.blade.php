@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Edit Data Profile</h2>
  <form class="form-add" method="POST" action="{{ route('editDataProfile.update', $profiles->id) }}" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Enter Title" name="title" value="{{$profiles->title}}" required />

    <input type="text" placeholder="Enter Biodata" name="biodata" value="{{$profiles->biodata}}" required />
    <div class="update-image">
      <input type="hidden" name="oldImage" value="{{ $profiles->image}}" />
      <img style="max-height: 100px; display: block; margin-bottom: 10px" src="{{ asset('storage/'.$profiles-> image) }}" alt="profile-image" />

      <input type="file" placeholder="Enter Image" name="image" value="{{$profiles->image}}" required />
      @error('image')
      <small>
        {{ $message }}
      </small>
      @enderror
    </div>
    <button type="submit" class="submit">Update</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

@endsection
