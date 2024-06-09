@extends('layout.main') @section('container')

<!-- Form Section -->
<section class="form" id="contact">
  <div id="signup" class="form-heading">
    <h1>Contact Us</h1>
  </div>
  <div class="form-wrapper">
    <div class="form-input">
      <h3>Send Message</h3>
      <form autocomplete="off" class="form-contact">
        <div class="inputBox">
          <input class="contact-name" type="text" required />
          <span>Full name</span>
        </div>
        <div class="inputBox">
          <input class="contact-email" type="text" required />
          <span>Email</span>
        </div>
        <div class="inputBox">
          <textarea class="contact-msg" required></textarea>
          <span>Write message</span>
        </div>
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
