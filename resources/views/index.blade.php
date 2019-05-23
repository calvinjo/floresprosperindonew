<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flores Prosperindo</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}"/>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/linkstyles.css')}}" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
    <style>

        .logo-about {
            width:40%;
          }
         @media only screen and (max-width: 600px) {
          .logo-about {
            width:100%;
          }
        }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    @include('navbar')
    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo-prosperindo-white.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tananaga">TanaNaga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/golomori">GoloMori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <header>
      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;autoplay: true">

        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="{{asset('img/land-of-the-dragon.jpg')}}" alt="" uk-cover>
                </div>
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
            </li>
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="{{asset('img/komodo-island.jpg')}}" alt="" uk-cover>
                </div>
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
            </li>
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="{{asset('img/diving-and-snorkeling.jpg')}}" alt="" uk-cover>
                </div>
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>

    </header>
    <div class="div-about uk-margin-large-top uk-margin-large-bottom">
      <div class="uk-flex-middle uk-flex-center" uk-grid>
          <center>
            <div class="uk-width uk-flex-first">
                <img src="{{asset('img/logo-prosperindo.png')}}" alt="Image">
            </div>
            </center>
            <div class="uk-width">
              <!-- <h1>About Us</h1> -->
              <article class="uk-article" style="padding-left:5%;padding-right:5%;">
                <p class="uk-text-lead uk-margin-medium-top uk-text-center@m">Flores Prosperindo (FP) is an Indonesian real estate
                    developer, focused in creating eco-tourism destination
                    for living and adventures in the island of Flores.</p>
                <p class="uk-text-center@m">FP strives to develop new sustainable world class tourism
                    destination, integrated with strategic planning to synergize
                    among hospitality, creativity, technology, health, edu-
                    cation and enterprise.</p>
                <center>
                  <h6 class="uk-text-large">Property - Properly - Prosperity</h6>
                </center>
              </article>
            </div>

      </div>
    </div>
    <hr class="uk-divider-icon">
    <div class="div-konten-wisata">
      <div class="uk-padding-small uk-margin-medium-top uk-margin-small-bottom">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-box-shadow-small uk-flex-middle"  uk-grid>
            <div class="uk-card-media-left uk-cover-container">
              <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('img/new-tana-naga.jpg');">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <h1 uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; viewport: 0.5;" class="uk-heading-medium" style="color:white;text-shadow: 2px 2px #9E9E9E;">TanaNaga</h1>
                    <p uk-parallax="opacity: 0,1,1; y: 100,0,0; x: -100,-100,0; scale: 0.5,1,1; viewport: 0.5;"><button class="uk-button uk-button-secondary uk-button-large">SEE DETAIL PROJECT</button></p>
                </div>
              </div>
            </div>
            <div>
                <div class="uk-card-body">
                  <article class="uk-article">
                        <p class="uk-article-meta">TanaNaga Supported by The Tourism Ministry</p>

                        <p class="uk-text-lead">
                          Tourism area that will be developed has an area of approximately 1000Ha, located on the edge of the southern island of Flores and has a beach line with a length of approximately 10Km.
                        </p>

                      </article>
                </div>
            </div>
        </div>
      </div>
      <div class="uk-padding-small uk-margin-medium-top uk-margin-small-bottom">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-box-shadow-small uk-flex-middle"  uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
              <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('img/new-bukit-cinta.jpg');">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" class="uk-heading-medium" style="color:white;text-shadow: 2px 2px #9E9E9E;">GoloMori</h1>
                    <p uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;"><button class="uk-button uk-button-secondary uk-button-large">SEE DETAIL PROJECT</button></p>
                </div>
              </div>
            </div>
            <div>
                <div class="uk-card-body">
                  <article class="uk-article">
                        <p class="uk-article-meta">GoloMori Supported by The Tourism Ministry</p>
                        <p class="uk-text-lead">
                          GoloMori with beautiful and amazing view direct to Rinca Island will be develop as New Religious Ethnic Destination & Exclusive Residence. Supporting with Public Arts & Cultures especially for Flores Cultural that can be a New location to celebrate festive events.
                        </p>
                      </article>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="uk-child-width" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .gb-support; delay: 100; repeat: true">
    <div>
      <div class="uk-margin-large-top uk-margin-large-bottom gb-support">
          <img class="image_100" src="{{asset('img/SUPPORT.png')}}" alt="...">
      </div>
    </div>
</div>
    <a href="https://www.google.co.id/maps/place/Stairway+To+Heaven+(Labuan+Bajo)/@-8.4663004,119.8798516,828m/data=!3m1!1e3!4m12!1m6!3m5!1s0x0:0xc0ff3e4936f3ee9f!2sStairway+To+Heaven+(Labuan+Bajo)!8m2!3d-8.4666824!4d119.8830381!3m4!1s0x0:0xc0ff3e4936f3ee9f!8m2!3d-8.4666824!4d119.8830381" target="_BLANK">
    <div class="grid__item color-4">
    </div>
	 </a>
    <div class="bg-gray">
      <div class="container">
          <div class="padding-3"></div>
          <div class="row">
              <div class="col-md-4">
                  <div class="padding-0"></div>
                  <div>
                    <h5><strong>Contact</strong></h5>
                    <div class="padding-0"></div>
                    <p>
                      <Strong>Email: </Strong><br>
                      info@floresprosperindo.com<br><br>

                      <strong>Phone: </strong><br>
                      +62217182780<br><br>

                      <strong>Address: </strong></br>
                      Mitra Hadiprana Building <br>
                      2nd Floor, Jl Kemang Raya No 30, 12370
                    </p>
                    <!-- <br>
                    <p>Danny Murniadi<br>
                      murniadi_danny@yahoo.com
                    </p>
                    <p>Dieter Napitupulu<br>
                      dieterna70@gmail.com
                    </p> -->
                  </div>
                  <div class="padding-0"></div>
              </div>
              <div class="col-md-8">
                <div id="contactus">
                    <h2 class="partner-title"><strong>For More Information or Investment Inquiries</strong></h2>
                    <form action="email.php" method="POST">
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" id="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="form-group">
                          <label for="comment">Message:</label>
                          <textarea class="form-control" name="pesan" rows="5" id="message"></textarea>
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
            </div>
        </div>
        <div class="padding-2"></div>
      </div>

      <!-- Footer -->
      <footer class="py-5 bg-gray">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Flores Prosperindo 2017</p>
        </div>
        <!-- /.container -->
      </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>
  </body>

</html>
