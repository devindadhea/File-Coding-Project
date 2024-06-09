@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Add Data User</h2>

  <form class="form-add" method="POST" action="{{ route('userPrivate.store') }}">
    @csrf

    <label for="user_name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required />

    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" required />

    <button type="submit" class="submit">Submit</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
@endsection
