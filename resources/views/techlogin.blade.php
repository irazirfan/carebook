@extends('layouts.home')
@section('style')
 <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
@endsection
@section('body')
<nav class="navbar navbar-expand-lg navbar-inverse bg-light">
      <a class="navbar-brand" href="index.html">CareBook</a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler toggler-example purple darken-3" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent41" aria-controls="navbarSupportedContent41" aria-expanded="false"
        aria-label="Toggle navigation"><span class="white-text"><i class="fas fa-bars fa-1x"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
              </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Features <span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pricing">Pricing</a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="/signup">Sign up</a>
          </li>
        </ul>
      </div>
    </nav>
<div class="card" style="margin-left: 400px; margin-top: 30px; height: 200px; ">
  <div class="container" style="padding-left: 100px; padding-top: 50px">
    <form method="post">
      @csrf
      <input type="radio" name="type" value="technation"><b>Login As Technation</b><br>
      <input type="radio" name="type" value="patient"><b>Login As Patient</b>
  </div>
  <div style="padding-left:200px">
    <button class="btn btn-success" type="submit">Login</button>
    </form>
  </div>
</div>

@endsection