@extends('layout.main') @section('container')

<!-- Form Section -->
<section class="form" id="contact">
  <div id="signup" class="form-heading">
    <h1>Contact Us</h1>
  </div>
  <div class="form-wrapper">
    <div class="form-input">
      <h3>Send Message</h3>
      @if(Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
      @endif
      <form  action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="inputBox">
          <input class="contact-name" type="text" required id="name" name="name" />
          <span>Full name</span>
        </div>
        @error('name')
        <span>{{ $message}}</span>
        @enderror

        <div class="inputBox">
          <input class="contact-email" type="email" required id="email" name="email" />
          <span>Email</span>
        </div>
        @error('email')
        <span>{{ $message}}</span>
        @enderror

        <div class="inputBox">
          <textarea class="contact-msg" required id="message" name="message"></textarea>
          <span>Write message</span>
        </div>
        @error('message')
        <span>{{ $message}}</span>
        @enderror

        <div class="inputBox">
          <input type="submit" value="Send" />
        </div>
      </form>
    </div>

    <div class="form-info">
      @foreach ($contacts as $contact)
      <div class="info-box">
        <i class="fas fa-map-marker-alt"></i>
        <div class="info-box-desc">
          <h3>Address</h3>
          <p>{{ $contact->address }}</p>
        </div>
      </div>
      <div class="info-box">
        <i class="fas fa-phone-alt"></i>
        <div class="info-box-desc">
          <h3>Phone</h3>
          <p>+{{ $contact->phone }}</p>
        </div>
      </div>

      <div class="info-box">
        <i class="fas fa-envelope"></i>
        <div class="info-box-desc">
          <h3>Email</h3>
          <p>{{ $contact->emailku }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Akhir dari form section -->

@endsection
