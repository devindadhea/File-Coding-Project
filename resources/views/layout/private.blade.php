<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/private.css" />
    <title>AdminSite</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <div class="footer-top">
            <h3><a href="#"><span>D</span>evin'<span>s</span></a></h3>
      <ul class="side-menu">
        <li>
          <a href="/dashboard-private" class="active"><img src ="/icons/dashboard.png"class="home-icon icon"></img> <b>Dashboard</b></a>
        </li>
        <li>
          <a href="/home-private"><img src="/icons/home.png" class="home-icon icon"></img> Home</a>
        </li>
        <li>
            <a href="/profile-private"><img src="/icons/profile.png" class="home-icon icon"></img> Profile</a>
        </li>
        <li>
            <a href="/contact-private"><img src="/icons/contact.png" class="home-icon icon"></img> Contact</a>
        </li>
        <li>
            <a href="/user-private"><img src="/icons/user.png" class="home-icon icon"></img>  User</a>
        </li>
        <li>
            <a href="/linkfooter-private"><img src="/icons/footer.png" class="home-icon icon"></img> Link Footer</a>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <section id="content">
      <nav>
        <form action="#">
          <div class="form-group">
            <input type="text" placeholder="Search..." />
            <i class="bx bx-search icon"></i>
          </div>
        </form>
    
        <span class="divider"></span>
        <div class="profile">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" />
          <ul class="profile-link">
            <li>
              <a href="#"><i class="bx bxs-user-circle icon"></i> Profile</a>
            </li>
            <li>
              <a href="#"><i class="bx bxs-cog"></i> Settings</a>
            </li>
            <li>
              <a href="#"><i class="bx bxs-log-out-circle"></i> Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- NAVBAR -->

    
    
    <div>
        @yield('container')
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="/script.js"></script>
  </body>
</html>
