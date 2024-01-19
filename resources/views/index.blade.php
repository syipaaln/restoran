<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sweetsy's Resto</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('wel/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('wel/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('wel/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('wel/images/logo.png') }}" alt="" />
            <span>
              Sweetsy
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="">HOME</a>
                <a href="{{ asset('wel/about.html') }}">ABOUT</a>
                <a href="{{ asset('wel/food.html') }}">Food</a>
                <a href="{{ asset('wel/contact.html') }}">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="side_heading">
        <h5>
          G
          o
          o
          d
          F
          o
          o
          d
        </h5>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 offset-md-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  01
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                  02
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                  03
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3">
                  04
                </li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box b-1">
                    <img src="{{ asset('wel/images/slider-img.png') }}" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box b-2">
                    <img src="{{ asset('wel/images/hot-1.png') }}" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box b-3">
                    <img src="{{ asset('wel/images/hot-2.png') }}" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box b-4">
                    <img src="{{ asset('wel/images/hot-3.png') }}" alt="" />
                  </div>
                </div>
              </div>
              <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class=" col-md-5 offset-md-1">
            <div class="detail-box">
              <h1>
                Good <br>
                Food
              </h1>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words
              </p>

              <div class="btn-box">
                <a href="{{ route('login') }}" class="btn-1">
                  Login
                </a>
                <a href="{{ route('register') }}" class="btn-2">
                  Register
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <br>
                Our <br>
                Food
              </h2>
              <hr>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('wel/images/about-img.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- dish section -->

  <section class="dish_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="dish_container">
            <div class="box">
              <img src="{{ asset('wel/images/dish.jpg') }}" alt="">
            </div>
            <div class="box">
              <img src="{{ asset('wel/images/dish.jpg') }}" alt="">
            </div>
            <div class="box">
              <img src="{{ asset('wel/images/dish.jpg') }}" alt="">
            </div>
            <div class="box">
              <img src="{{ asset('wel/images/dish.jpg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
                Our <br>
                Food <br>
                dishs
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end dish section -->

  <!-- hot section -->

  <section class="hot_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What's Hot
        </h2>
        <hr>
      </div>
      <p>
        There are many variations of passages of Lorem Ipsum available, but the majority
      </p>
    </div>
    <div class="carousel_container">
      <div class="container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{ asset('wel/images/hot-1.png') }}" />
                </div>
                <div class="detail-box">
                  <h4>
                    $30
                  </h4>
                  <p>
                    There are many variations of passages of Lorem Ipsum available,
                  </p>
                  <a href="">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{ asset('wel/images/hot-2.png') }}" />
                </div>
                <div class="detail-box">
                  <h4>
                    $30
                  </h4>
                  <p>
                    There are many variations of passages of Lorem Ipsum available,
                  </p>
                  <a href="">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{ asset('wel/images/hot-3.png') }}" />
                </div>
                <div class="detail-box">
                  <h4>
                    $30
                  </h4>
                  <p>
                    There are many variations of passages of Lorem Ipsum available,
                  </p>
                  <a href="">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end hot section -->

  <!-- app section -->

  <section class="app_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="img-box">
            <img src="{{ asset('wel/images/man-with-phone.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-6 offset-md-2">
          <div class="detail-box">
            <h2>
              <span> 50% </span> off On every food
              download now our app
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by
            </p>
            <div class="btn-box">
              <a href="">
                <img src="{{ asset('wel/images/app-store.png') }}" alt="">
              </a>
              <a href="">
                <img src="{{ asset('wel/images/play-store.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end app section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          what is says our clients
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box ">
              <div class="client_id">
                <div class="img-box">
                  <img src="{{ asset('wel/images/client.png') }}" alt="" class="img-fluid">
                </div>
                <h4>
                  Jacksmith sand
                </h4>
              </div>
              <div class="detail-box">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which .
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box ">
              <div class="client_id">
                <div class="img-box">
                  <img src="{{ asset('wel/images/client.png') }}" alt="" class="img-fluid">
                </div>
                <h4>
                  Jacksmith sand
                </h4>
              </div>
              <div class="detail-box">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which .
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box ">
              <div class="client_id">
                <div class="img-box">
                  <img src="{{ asset('wel/images/client.png') }}" alt="" class="img-fluid">
                </div>
                <h4>
                  Jacksmith sand
                </h4>
              </div>
              <div class="detail-box">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which .
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box ">
              <div class="client_id">
                <div class="img-box">
                  <img src="{{ asset('wel/images/client.png') }}" alt="" class="img-fluid">
                </div>
                <h4>
                  Jacksmith sand
                </h4>
              </div>
              <div class="detail-box">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom ">
    <div class="container">
      <h2>
        Get In touch
      </h2>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              <input type="text" placeholder="Name">
              <input type="text" placeholder="Phone number">
              <input type="email" placeholder="Email">
              <input type="text" placeholder="Message" class="message_input">
              <button>
                Send
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="contact_box">
            <a href="">
              <div class="img-box">
                <img src="{{ asset('wel/images/location.png') }}" alt="">
              </div>
              <h6>
                Gb road 123 london Uk
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <img src="{{ asset('wel/images/call.png') }}" alt="">
              </div>
              <h6>
                (+01) 123456789012
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <img src="{{ asset('wel/images/envelope.png') }}" alt="">
              </div>
              <h6>
                demo@gmail.com
              </h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- subscribe section -->

  <section class="subscribe_section">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <label for="subEmail">
              Our Newsletter
            </label>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="box">
              <input type="email" placeholder="Enter your email" id="subEmail">
              <button>
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- end subscribe section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="social_container">
      <h4>
        Follow on
      </h4>
      <div class="social-box">
        <a href="">
          <img src="{{ asset('wel/images/fb.png') }}" alt="">
        </a>
        <a href="">
          <img src="{{ asset('wel/images/twitter.png') }}" alt="">
        </a>
        <a href="">
          <img src="{{ asset('wel/images/linkedin.png') }}" alt="">
        </a>
        <a href="">
          <img src="{{ asset('wel/images/youtube.png') }}" alt="">
        </a>
      </div>
    </div>
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ asset('wel/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('wel/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 35,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>