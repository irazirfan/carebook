<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('theme/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/CSS/slick.css')}}">
    <link rel="stylesheet" href="{{asset('theme/CSS/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('theme/CSS/all.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('theme/CSS/style1.css')}}">
</head>
<body>
<!-- navbar part start -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('theme/Images/.png')}}" alt="logo">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
			        <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('home.about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home.pricing')}}">Pricing</a>
              </li>
                <li class="nav-item ">
                <a class="nav-link" href="{{route('home.signup')}}">Sign up</a>
              </li>
            </ul>
          </div>
    </div>
</nav>
<!-- navbar part end -->

<!-- banner part start -->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 banner-slide">
                <div class="banner-text text-center">
                    <h2>We Are Carebook Developer</h2>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">LEARN MORE</button></a>
                </div>
                <div class="banner-text text-center">
                    <h2>We Are Carebook Developer</h2>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">LEARN MORE</button></a>
                </div>
                <div class="banner-text text-center">
                    <h2>We Are Carebook Developer</h2>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">LEARN MORE</button></a>
                </div>
                <div class="banner-text text-center">
                    <h2>We Are Carebook Developer</h2>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">LEARN MORE</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part end -->

<!-- about part start -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center">
                <div class="about-img">
                    <img src="{{asset('theme/Images/about-img.png')}}" alt="about-img" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-text">
                    <h2>OUR STORY</h2>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">LEARN MORE</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end -->

<!-- video part start -->
<section id="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-icon text-center">
                   <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/CDEyZwFlHsM"><i class="fas fa-play-circle"></i></a>
                    <p>WATCH OUR STORY</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video part end -->

<!-- team part start -->
<section id="team">
    <div class="container team-main">
        <div class="row">
            <div class="col-lg-12">
                <div class="head text-center">
                    <h2>MEET OUR AMAZING TEAM</h2>
                    <!-- <p>Lorem ipsum dolor sit amet proin gravida nibh vel velit</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                  <img class="card-img-top img-fluid" style="height: 265px" src="{{asset('theme/Images/1.jpg')}}" alt="Card image cap">
                  <div class="card-body text-center">
                    <h4>Mahmudul Hasan</h4>
                    <p>Web Developer</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{asset('theme/Images/2.jpg')}}" alt="Card image cap">
                  <div class="card-body text-center">
                    <h4>Iraz Irfan</h4>
                    <p>Web Developer</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{asset('theme/Images/3.jpg')}}" alt="Card image cap">
                  <div class="card-body text-center">
                    <h4>Hasan Shahriar</h4>
                    <p>Web Developer</p>
                  </div>
                </div>
            </div>
            <!-- <div class="col-lg-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{asset('theme/Images/4.jpg')}}" alt="Card image cap">
                  <div class="card-body text-center">
                    <h4>Sanjida </h4>
                    <p>Tester</p>
                  </div>
                </div>
            </div>
        </div> -->
        
    </div>
</section>
<!-- team part end -->


<!-- contact part start -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
               <div class="head">
                    <h2>Contact Us</h2>
                </div>
                <div class="form">
                    <form action="" method="post">
                        <div class="row">
                          <div class="form-group col-lg-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" placeholder="subject">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" placeholder="message"></textarea>
                              </div>
                              <div class="col-lg-12">
                                  <a href="#"><button type="submit" class="btn btn-outline-primary">Submit</button></a>
                              </div>
                              <br><br><br>
                        </div>
                    </form>
                </div>
            </div>
</section>
<!-- contact part end -->

<script src="{{asset('theme/JS/jquery-1.12.4.min.js')}}"></script>        
<script src="{{asset('theme/JS/bootstrap.min.js')}}"></script>        
<script src="{{asset('theme/JS/slick.min.js')}}"></script>        
<script src="{{asset('theme/JS/venobox.min.js')}}"></script>        
<script src="{{asset('theme/JS/isotope.pkgd.js')}}"></script>        
<script src="{{asset('theme/JS/custom.js')}}"></script>        
</body>
</html>