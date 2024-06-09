@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Add Data Profile</h2>

  <form class="form-add" method="POST" action="{{ route('profilePrivate.store') }}">
    @csrf

    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter Title" name="title" required />

    <label for="biodata"><b>Biodata</b></label>
    <input type="text" placeholder="Enter Biodata" name="biodata" required />

    <button type="submit" class="submit">Submit</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
@endsection
