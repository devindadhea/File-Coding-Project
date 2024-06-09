@extends('layout.private')

@section('container')
    

      <!-- MAIN -->
      <main>
        <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
          <li>CRUD</li>
          <li class="divider">/</li>
          <li>Dashboard</li>
        </ul>
        <div class="info-data">
          <div class="card">
            <div class="head">
              <div>
                <h2>UI UX Designer</h2>
              </div>
              <i class="bx bx-trending-up icon"></i>
            </div>
            <span class="progress" data-value="40%"></span>
            <span class="label">90%</span>
          </div>
          <div class="card">
            <div class="head">
              <div>
                <h2>Tableu</h2>
              </div>
              <i class="bx bx-trending-down icon down"></i>
            </div>
            <span class="progress" data-value="60%"></span>
            <span class="label">80%</span>
          </div>
          <div class="card">
            <div class="head">
              <div>
                <h2>Adobe Xd</h2>
              </div>
              <i class="bx bx-trending-up icon"></i>
            </div>
            <span class="progress" data-value="30%"></span>
            <span class="label">80%</span>
          </div>
          <div class="card">
            <div class="head">
              <div>
                <h2>Design Resources</h2>
              </div>
              <i class="bx bx-trending-up icon"></i>
            </div>
            <span class="progress" data-value="80%"></span>
            <span class="label">80%</span>
          </div>
        </div>
        
      </main>
      <!-- MAIN -->
      @endsection