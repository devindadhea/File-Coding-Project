@extends('layout.private')

@section('container')
    
<div class="section-add">
    <h2>Form Add Data Footer</h2>

    <form class="form-add" method="POST" action="{{ route('footerPrivate.store') }}">
      @csrf
      
        <label for="myskills"><b>My Skill</b></label>
        <input type="text" placeholder="Enter Skill" name="myskills" required />

        <label for="shortcut"><b>Shortcut</b></label>
        <input type="text" placeholder="Enter Shortcut" name="shortcut" required></input>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required /> 


        <button type="submit" class="submit">Submit</button>
      

      <div class="container" style="background-color: #f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
    @endsection