@extends('layout.main') @section('container')

<div class="container jumbutron" id="#home">
  <!-- Hero Section -->
  <section class="hero" style="align-items: center; margin-top: auto; margin-bottom: auto">
    <div class="hero-typography">
      <h3 class="lorem">Hello i'm</h3>
      @foreach ($homes as $home)
      <h1 class="hero-heading">{{ $home->name }}</h1>
      <p class="hero-paragraph">{{ $home->description }}</p>

      @endforeach
      <div class="hero-btn">
        <a href="#class">Hire me!</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="{{ asset('storage/'.$home-> image) }}" alt="" style="height: 350px" />
    </div>
  </section>
  <!-- Akhir Hero Section -->
</div>

@endsection
