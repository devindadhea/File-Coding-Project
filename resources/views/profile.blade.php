@extends('layout.main') @section('container') @foreach ($profiles as $profile)

<h1 class="profile-title">{{ $profile->title }}</h1>

<div class="flex-profile">
  <div class="hero-image left-section">
    <img src="{{ asset('storage/'.$profile-> image) }}" alt="" style="height: 350px" />
  </div>
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
