@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Edit Data Contact</h2>
  <form class="form-add" method="POST" action="{{ route('editDataContact.update', $contacts->id) }}">
    @csrf
    <input type="text" placeholder="Enter Email" name="emailku" value="{{$contacts->emailku}}" required />

    <input type="text" placeholder="Enter Address" name="address" value="{{$contacts->address}}" required />

    <input type="text" placeholder="Enter Phone" name="phone" value="{{$contacts->phone}}" required />

    <button type="submit" class="submit">Update</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

@endsection
