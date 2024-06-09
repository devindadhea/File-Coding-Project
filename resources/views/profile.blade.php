@extends('layout.main') @section('container') @foreach ($profiles as $profile)

<h1 class="profile-title">{{ $profile->title }}</h1>

<div class="flex-profile">
  <div class="left-section"><img src="image/call.jpg" alt="" /></div>
  <div class="right-section">
    <p>
      {{ $profile->biodata }}
    </p>
  </div>
</div>
@endforeach

<div class="hero-btn cv">
  <a href="#class">Download CV</a>
</div>

@endsection
