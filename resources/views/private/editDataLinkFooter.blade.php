@extends('layout.private') @section('container')

<div class="section-add">
  <h2>Form Edit Data Linl Footer</h2>
  <form class="form-add" method="POST" action="{{ route('editDataLinkFooter.update', $footers->id) }}">
    @csrf
    <input type="text" placeholder="Enter Skills" name="myskills" value="{{$footers->myskills}}" required />

    <input type="text" placeholder="Enter Shortcut" name="shortcut" value="{{$footers->shortcut}}" required />

    <input type="text" placeholder="Enter Address" name="address" value="{{$footers->address}}" required />

    <button type="submit" class="submit">Update</button>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

@endsection
