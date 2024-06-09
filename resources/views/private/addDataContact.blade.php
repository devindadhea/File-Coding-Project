@extends('layout.private')

@section('container')
    
<div class="section-add">
    <h2>Form Add Data Contact</h2>

    <form class="form-add" method="POST" action="{{ route('contactPrivate.store') }}">
      @csrf
      
        <label for="emailku"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="emailku" required />

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required /> 

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone" required></input>

        <button type="submit" class="submit">Submit</button>
      

      <div class="container" style="background-color: #f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
    @endsection