<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>221210049</title>
  <link rel="shortcut icon" href="images/iconweb.svg" type="image/x-icon">
  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- My Style -->
  <link rel="stylesheet" href="styles/style.css">

</head>
<style>
  /* nav ul li:first-child a {
    color: #2447f9;
  } */

  body{
    scroll-behavior: smooth;
  }

  @media screen and (max-width: 576px) {
    nav ul li:first-child a{
      color: white !important;
    }
  }

 
</style>
<body>
  <!-- Navbar -->
  <nav id="navbar"> 
    <div class="nav-logo">
      <h3><a href="#"><span>D</span>evin'<span>s</span></a></h3>
    </div>
    <ul class="nav-links">
      <li><a class="nav-link" href="/home">Home</a></li>
      <li><a class="nav-link" href="/profile">Profile</a></li>
      <li><a class="nav-link" href="/contact">Contact Us</a></li>
      <li><a class="nav-link" href="/login">Login</a></li>
    </ul>
    <div class="menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
  
<div class="section-yield">
@yield('container')
</div>


   </div>
  <!-- Footer -->
  <footer>
    <div class="footer-top">
    <h3><a href="#"><span>D</span>evin'<span>s</span></a></h3>
      <p>let's get to know me better</p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
    {{-- @foreach ($footers as $footer) --}}
    <div class="middle-footer">
      <div class="box">
        <h2>My Skill's</h2>
        <ul>
          
          {{-- <li><a href="#">{{ $footer->myskills }}</a></li> --}}
          
          <li><a href="#">UI/UX Design</a></li>
          <li><a href="#">Adobe XD</a></li>
          <li><a href="#">Tableu</a></li>
          <li><a href="#">Design Resources</a></li>
        </ul>
      </div>
      <div class="box">
        <h2>Shortcut</h2>
        <ul>
          {{-- <li><a href="#">{{ $footer->shortcut }}</a></li> --}}
          <li><a class="nav-link" href="">Home</a></li>
      <li><a class="nav-link" href="#why">Profile</a></li>
      <li><a class="nav-link" href="#top">Contact</a></li>
      <li><a class="nav-link" href="#mentor">Login</a></li>

        </ul>
      </div>
      <div class="box">
        <h2>Address</h2>
        <ul>
          {{-- <li><a href="#">{{ $footer->address }}</a></li> --}}
          <li>Mercu Buana Yogyakarta University</li>
          <li>Jl.Gejayan Jembatan Merah</li>
          <li>Indonesia</li>
        </ul>
      </div>
    </div>
    {{-- @endforeach --}}
    <p>Copyright &copy; 2024 </p>
  </footer>
</body>
<script src="https://kit.fontawesome.com/ba150134be.js" crossorigin="anonymous"></script>
<script src="script.js"></script>  
</html>