@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Edit Data User</h2>
  <form class="form-add" method="POST" action="{{ route('editDataUser.update', $users->id) }}">
    @csrf
    <input type="text" placeholder="Enter Username" name="user_name" value="{{$users->user_name}}" required />

    <input type="text" placeholder="Enter Password" name="password" value="{{$users->password}}" required />

    <button type="submit" class="submit">Update</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

@endsection
