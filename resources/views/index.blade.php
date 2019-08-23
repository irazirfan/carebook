@extends('layouts.home')

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
   <!-- main table for home page -->
    <table class="homeTable">
        <tr>
            <td id="formCell">
                <div class="container">
                    <div class="row">
                        <form method="post" action="">
                          @csrf
                          <div class="form-group col col-*">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                          <div class="form-group col col-*">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <!-- <button type="submit" class="btn btn-primary col col-*">Submit</button> -->
                          <input type="submit" name="submit" value="Sign in" class="btn btn-primary col col-*">
                          </br>
                          </br>
                          <br>
                          <div align="center">
                            <a href="#" >Not a member? Sign Up</a>
                            </br>
                            <a href="#" >Reset Password</a>
                          </div>
                          

                        </form>
                    </div>
                </div>
            </td>
            <td id="slideCell">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('theme/Images/patientSlide.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Happy Patient</h5>
                            <p>...</p>
                        </div>

                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('theme/Images/doctorSlide.jpg')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>

                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('theme/Images/pharmacistSlide.jpg')}}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>

                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('theme/Images/technicianSlide.jpg')}}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>

                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </td>
        </tr>
    </table>

@endsection
