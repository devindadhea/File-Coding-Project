@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Edit Data Profile</h2>
  <form class="form-add" method="POST" action="{{ route('editDataProfile.update', $profiles->id) }}">
    @csrf
    <input type="text" placeholder="Enter Title" name="title" value="{{$profiles->title}}" required />

    <input type="text" placeholder="Enter Biodata" name="biodata" value="{{$profiles->biodata}}" required />

    <button type="submit" class="submit">Update</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

@endsection
