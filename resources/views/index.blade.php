<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tuin Token</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/tuin_logo.png" rel="icon">
  <link href="assets/img/tuin_logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <style>
    #navbar.navbar {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    #header {
    background-color: gray;
  }
  </style>
  

  <!-- ======= Header ======= -->
<header id="header" >
  <style>
    @media (max-width: 767px) {
      .hide-padding-mobile {
        padding-left: 12px !important;
      }
      
    }
  </style>
  <div class="align-items-center">
    <div class="row">
      <div class="col-md-4 col-6 hide-padding-mobile" style="padding-left: 200px;">
        <div class="pic">
          <h1 class="logo me-auto">
            <img style="max-width: 50px; height: auto;" src="assets/img/tuin_logo.png" class="img-fluid logo-image" alt="">
            <a href="index.html">Tuin</a>
          </h1>
        </div>
      </div>
      <div class="col-md-4 col-2">
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Roadmaps</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">News</a></li>
            <li><a class="nav-link scrollto" href="#clients_2">Partner</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#why-us">Whitepaper</a></li>
            <li><a class="nav-link scrollto" href="#cta_2">Manifesto</a></li>
            <li><a class="nav-link scrollto" href="#why-us_2">Tokenomics</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <div class="header-icons">
            <img src="path/to/image1.png" class="header-icon" alt="">
            <img src="path/to/image2.png" class="header-icon" alt="">
          </div>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
      <div class="col-md-4 col-4" style="padding-left: 200px;">
        <style>
          @media (max-width: 767px) {
            .col-4 {
              padding-left: 0 !important;
            }
          }
        </style>
        
        <div class="pic">
          <h1 class="logo me-auto">
            <img style="max-width: 50px; height: auto;" src="assets/img/pancakeswap.png" class="img-fluid logo-image" alt="">
            <img style="max-width: 50px; height: auto;" src="assets/img/Uniswap.png" class="img-fluid logo-image" alt="">
          </h1>
        </div>
      </div>
      
      
    </div>
    
</div>
  
</header><!-- End Header -->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <!-- Add this in the head section of your HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- Add this before the closing body tag -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $('#languageModal').modal('show');
  });
</script>

<!-- Modal -->
<div class="modal fade show" id="languageModal" tabindex="-1" role="dialog" aria-labelledby="languageModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="languageModalLabel">Select Language</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add your language selection form or content here -->
        <!-- For example: -->
        <div class="text-center">
          <h3>Select Language</h3>
          <a href="{{ url('/bhs') }}"> <img style="max-width: 50px; height: auto;" src="assets/img/indo.png" class="img-fluid logo-image" alt=""></a>
          <a href="{{ url('/en') }}"> <img style="max-width: 50px; height: auto;" src="assets/img/Flag_of_the_United_Kingdom.png" class="img-fluid logo-image" alt=""></a>
          <a href="{{ url('/chn') }}"> <img style="max-width: 50px; height: auto;" src="assets/img/china.png" class="img-fluid logo-image" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="container">
      <br>
      <div class="row">
        <div class="col-lg-4 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-lg-1" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/tuin_g.png" class="img-fluid animated" alt="" style="width:100%; max-width: 500px; height:auto;">
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="200">
          <h1 class="text-center">Bridging Revolution Of The Funding Gap</h1>
          <h2 class="text-center"> With Tuin Token and Web 3.0 Ecosystem</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <div class="d-flex justify-content-center">
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M501.299,132.766c-5.888,-22.03 -23.234,-39.377 -45.264,-45.264c-39.932,-10.701 -200.037,-10.701 -200.037,-10.701c0,0 -160.105,0 -200.038,10.701c-22.025,5.887 -39.376,23.234 -45.264,45.264c-10.696,39.928 -10.696,123.236 -10.696,123.236c0,0 0,83.308 10.696,123.232c5.888,22.03 23.239,39.381 45.264,45.268c39.933,10.697 200.038,10.697 200.038,10.697c0,0 160.105,0 200.037,-10.697c22.03,-5.887 39.376,-23.238 45.264,-45.268c10.701,-39.924 10.701,-123.232 10.701,-123.232c0,0 0,-83.308 -10.701,-123.236Z" style="fill:#ed1f24;fill-rule:nonzero;"/><path d="M204.796,332.803l133.018,-76.801l-133.018,-76.801l0,153.602Z" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
              </a>
              </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://medium.com/@tuin_67889">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M511.2,256C511.2,115.155 396.851,0.806 256.006,0.806L255.994,0.806C115.149,0.806 0.8,115.155 0.8,256C0.8,396.845 115.149,511.194 255.994,511.194L256.006,511.194C396.851,511.194 511.2,396.845 511.2,256ZM281.624,256.002C281.624,318.733 231.116,369.586 168.814,369.586C106.512,369.586 56,318.721 56,256.002C56,193.282 106.508,142.414 168.814,142.414C231.12,142.414 281.624,193.271 281.624,256.002ZM405.381,256.002C405.381,315.05 380.126,362.936 348.974,362.936C317.821,362.936 292.567,315.05 292.567,256.002C292.567,196.954 317.817,149.067 348.97,149.067C380.123,149.067 405.377,196.939 405.377,256.002L405.381,256.002ZM456,256.002C456,308.894 447.119,351.798 436.162,351.798C425.204,351.798 416.327,308.906 416.327,256.002C416.327,203.098 425.207,160.206 436.162,160.206C447.116,160.206 456,203.094 456,256.002Z"/></g></svg>
               </a>
              </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://discord.gg/DxQvEGrZcJ">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x39_1-discord"><g><path d="M447.249,82.455V474.57c-55.065-48.661-37.454-32.553-101.418-92.018L350,422.987H109.557    c-24.698,0-44.806-20.106-44.806-45.026V82.455c0-24.917,20.107-45.025,44.806-45.025H402.44    C427.14,37.43,447.249,57.538,447.249,82.455z" style="fill:#8A9CFE;"/><path d="M353.481,162.233c-31.474-23.605-61.418-22.95-61.418-22.95l-3.06,3.498    c37.157,11.365,54.425,27.758,54.425,27.758c-51.921-28.456-112.91-28.46-163.273-6.338c-8.088,3.715-12.896,6.338-12.896,6.338    s18.142-17.267,57.485-28.632l-2.185-2.624c0,0-29.945-0.655-61.419,22.95c0,0-31.474,57.047-31.474,127.426    c0,0,18.361,31.692,66.663,33.223c0,0,8.088-9.834,14.645-18.142c-27.759-8.306-38.249-25.789-38.249-25.789    c3.215,2.248,8.517,5.168,8.961,5.463c36.892,20.662,89.295,27.43,136.388,7.65c7.648-2.841,16.174-6.995,25.135-12.896    c0,0-10.929,17.924-39.562,26.01c6.559,8.305,14.427,17.703,14.427,17.703c48.304-1.53,66.881-33.223,66.881-33.223    C384.955,219.28,353.481,162.233,353.481,162.233z M216.438,269.333c-12.24,0-22.295-10.928-22.295-24.262    c0-13.333,9.836-24.261,22.295-24.261c12.458,0,22.513,10.928,22.294,24.261C238.732,258.405,228.896,269.333,216.438,269.333z     M296.216,269.333c-12.239,0-22.294-10.928-22.294-24.262c0-13.333,9.836-24.261,22.294-24.261    c12.459,0,22.295,10.928,22.295,24.261C318.511,258.405,308.675,269.333,296.216,269.333z" style="fill:#FDFDFD;"/></g></g><g id="Layer_1"/></svg>
               </a>
              </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://www.reddit.com/u/tuincoin/?">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Artwork"><circle cx="255.999" cy="255.999" r="256" style="fill:#ff4500;"/><path d="M426.666,255.999c0,-20.659 -16.767,-37.427 -37.427,-37.427c-10.18,0 -19.163,3.893 -25.75,10.48c-25.45,-18.264 -60.781,-30.241 -99.705,-31.738l17.067,-79.944l55.391,11.677c0.599,14.073 12.276,25.451 26.648,25.451c14.672,0 26.648,-11.977 26.648,-26.648c0,-14.672 -11.976,-26.648 -26.648,-26.648c-10.479,0 -19.462,5.988 -23.653,14.97l-61.979,-13.174c-1.797,-0.299 -3.593,0 -5.09,0.898c-1.497,0.899 -2.396,2.396 -2.995,4.192l-18.863,89.226c-39.822,1.198 -75.452,12.875 -101.202,31.738c-6.587,-6.288 -15.869,-10.48 -25.75,-10.48c-20.659,0 -37.426,16.768 -37.426,37.427c0,15.27 8.982,28.145 22.156,34.134c-0.599,3.593 -0.898,7.485 -0.898,11.377c0,57.488 66.77,103.897 149.408,103.897c82.639,0 149.408,-46.409 149.408,-103.897c0,-3.892 -0.299,-7.485 -0.898,-11.078c12.276,-5.988 21.558,-19.163 21.558,-34.433Zm-256,26.648c0,-14.671 11.977,-26.648 26.648,-26.648c14.671,0 26.648,11.977 26.648,26.648c0,14.672 -11.977,26.648 -26.648,26.648c-14.671,0 -26.648,-11.976 -26.648,-26.648Zm148.809,70.363c-18.264,18.264 -52.996,19.462 -63.176,19.462c-10.18,0 -45.212,-1.497 -63.177,-19.462c-2.695,-2.695 -2.695,-7.186 0,-9.881c2.695,-2.695 7.186,-2.695 9.881,0c11.378,11.378 35.93,15.57 53.595,15.57c17.666,0 41.918,-4.192 53.595,-15.57c2.695,-2.695 7.186,-2.695 9.881,0c2.096,2.994 2.096,7.186 -0.599,9.881Zm-4.79,-43.715c-14.672,0 -26.648,-11.976 -26.648,-26.648c0,-14.671 11.976,-26.648 26.648,-26.648c14.671,0 26.648,11.977 26.648,26.648c0,14.672 -11.977,26.648 -26.648,26.648Z" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
               </a>
              </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://twitter.com/tuincoin?s=21&t=KLAkM9nDkfX9wXHjWc6kGw">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 32 32" height="100%" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.993,6.077C30.816,6.6,29.552,6.953,28.223,7.11c1.355-0.812,2.396-2.098,2.887-3.63  c-1.269,0.751-2.673,1.299-4.168,1.592C25.744,3.797,24.038,3,22.149,3c-3.625,0-6.562,2.938-6.562,6.563  c0,0.514,0.057,1.016,0.169,1.496C10.301,10.785,5.465,8.172,2.227,4.201c-0.564,0.97-0.888,2.097-0.888,3.3  c0,2.278,1.159,4.286,2.919,5.464c-1.075-0.035-2.087-0.329-2.972-0.821c-0.001,0.027-0.001,0.056-0.001,0.082  c0,3.181,2.262,5.834,5.265,6.437c-0.55,0.149-1.13,0.23-1.729,0.23c-0.424,0-0.834-0.041-1.234-0.117  c0.834,2.606,3.259,4.504,6.13,4.558c-2.245,1.76-5.075,2.811-8.15,2.811c-0.53,0-1.053-0.031-1.566-0.092  C2.905,27.913,6.355,29,10.062,29c12.072,0,18.675-10.001,18.675-18.675c0-0.284-0.008-0.568-0.02-0.85  C30,8.55,31.112,7.395,31.993,6.077z" fill="#55ACEE"/><g/><g/><g/><g/><g/><g/></svg>
               </a>
              </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="">
                <?xml version="1.0" ?><svg style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve"height="100%" width="80%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                  .st0{fill:#4267B2;}
                  .st1{fill:url(#SVGID_1_);}
                  .st2{fill:#FFFFFF;}
                  .st3{fill:#C2191E;}
                  .st4{fill:#1DA1F3;}
                  .st5{fill:#FEFE00;}
                  .st6{fill:#25D366;stroke:#FFFFFF;stroke-width:5;stroke-miterlimit:10;}
                  .st7{fill:#CB2027;}
                  .st8{fill:#0077B5;}
                  .st9{fill:url(#SVGID_2_);}
                  .st10{fill:url(#SVGID_3_);}
                  .st11{fill:#FF004F;}
                  .st12{fill:#00F7EF;}
                  .st13{fill:#5181B8;}
                  .st14{fill:#395976;}
                  .st15{fill:#F58220;}
                  .st16{fill:#E6162D;}
                  .st17{fill:#FF9933;}
                </style><g id="guidlines"/><g id="FB"/><g id="ig"/><g id="yt"/><g id="twitter"/><g id="snapchat"/><g id="WA"/><g id="Pinterrest"/><g id="Layer_9"/><g id="Layer_10"/><g id="Layer_11"><g><g><path class="st11" d="M58,19.4v9.3c-0.5,0-1.1,0.1-1.7,0.1c-4.5,0-8.7-1.7-11.9-4.4v19.8c0,4-1.3,7.8-3.6,10.8     c-3.2,4.3-8.4,7.2-14.3,7.2c-6.4,0-12-3.4-15.1-8.4c3.2,3,7.5,4.9,12.2,4.9c5.8,0,11-2.8,14.2-7.2c2.2-3,3.6-6.7,3.6-10.8V20.8     c3.2,2.8,7.3,4.4,11.9,4.4c0.6,0,1.1,0,1.7-0.1v-6c0.9,0.2,1.7,0.3,2.6,0.3H58z"/><path class="st11" d="M29,26.3v10.3c-0.7-0.2-1.5-0.3-2.2-0.3c-4.4,0-8,3.7-8,8.2c0,1,0.2,1.9,0.5,2.8c-2-1.5-3.4-3.9-3.4-6.6     c0-4.5,3.6-8.2,8-8.2c0.8,0,1.5,0.1,2.2,0.3l0-6.6c0.2,0,0.4,0,0.6,0C27.5,26.2,28.3,26.2,29,26.3z"/><path class="st11" d="M45.9,12c-1.8-1.6-3.1-3.8-3.8-6.1h2.4c0,0.5,0,0.9,0,1.4C44.7,8.9,45.2,10.5,45.9,12z"/></g></g><path d="M55.1,19.2v6c-0.5,0.1-1.1,0.1-1.7,0.1c-4.5,0-8.7-1.7-11.9-4.4v19.8c0,4-1.3,7.8-3.6,10.8c-3.3,4.4-8.4,7.2-14.2,7.2   c-4.7,0-9-1.9-12.2-4.9c-1.7-2.8-2.7-6-2.7-9.5c0-9.7,7.7-17.6,17.3-17.9l0,6.6c-0.7-0.2-1.5-0.3-2.2-0.3c-4.4,0-8,3.7-8,8.2   c0,2.7,1.3,5.2,3.4,6.6c1.1,3.1,4.1,5.4,7.5,5.4c4.4,0,8-3.7,8-8.2V5.9h7.3c0.7,2.4,2,4.5,3.8,6.1C47.7,15.6,51.1,18.3,55.1,19.2z"/><g><g><g><path class="st12" d="M26.1,22.8l0,3.4c-9.6,0.3-17.3,8.2-17.3,17.9c0,3.5,1,6.7,2.7,9.5C8.1,50.3,6,45.7,6,40.5      c0-9.9,8-17.9,17.8-17.9C24.6,22.6,25.4,22.7,26.1,22.8z"/><path class="st12" d="M42.1,5.9h-7.3v38.6c0,4.5-3.6,8.2-8,8.2c-3.5,0-6.4-2.2-7.5-5.4c1.3,0.9,2.9,1.5,4.6,1.5      c4.4,0,8-3.6,8-8.1V2h9.7v0.2c0,0.4,0,0.8,0.1,1.2C41.7,4.2,41.9,5.1,42.1,5.9z"/></g></g><path class="st12" d="M55.1,15.5C55.1,15.5,55.1,15.5,55.1,15.5v3.6c-4-0.8-7.4-3.5-9.3-7.1C48.3,14.3,51.5,15.6,55.1,15.5z"/></g></g><g id="Layer_12"/><g id="Layer_13"/><g id="Layer_14"/><g id="Layer_15"/><g id="Layer_16"/><g id="Layer_17"/></svg>
               </a>
              </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://instagram.com/tuincoin?igshid=MzRlODBiNWFlZA==">
              <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x31_73-instagram"><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="74.3496" x2="393.8339" y1="83.7275" y2="386.7129"><stop offset="0" style="stop-color:#FEC053"/><stop offset="0.3273" style="stop-color:#F2203E"/><stop offset="0.6485" style="stop-color:#B729A8"/><stop offset="1" style="stop-color:#5342D6"/></linearGradient><path d="M256.052,138.088c-65.268,0-117.913,52.646-117.913,117.912    c0,65.267,52.645,117.91,117.913,117.91c65.267,0,117.911-52.644,117.911-117.91C373.963,190.734,321.318,138.088,256.052,138.088    z M256.052,332.659c-42.177,0-76.659-34.38-76.659-76.659c0-42.279,34.378-76.657,76.659-76.657    c42.277,0,76.657,34.378,76.657,76.657C332.709,298.279,298.229,332.659,256.052,332.659L256.052,332.659z M406.288,133.266    c0,15.291-12.315,27.502-27.502,27.502c-15.292,0-27.502-12.314-27.502-27.502c0-15.188,12.313-27.503,27.502-27.503    C393.973,105.763,406.288,118.077,406.288,133.266z M484.382,161.177c-1.743-36.839-10.158-69.474-37.148-96.36    c-26.886-26.887-59.52-35.302-96.36-37.148c-37.971-2.155-151.777-2.155-189.747,0c-36.739,1.743-69.372,10.159-96.361,37.046    c-26.99,26.887-35.302,59.52-37.149,96.36c-2.155,37.969-2.155,151.777,0,189.747c1.745,36.842,10.159,69.473,37.149,96.361    c26.989,26.887,59.521,35.301,96.361,37.148c37.969,2.154,151.776,2.154,189.747,0c36.841-1.744,69.475-10.161,96.36-37.148    c26.887-26.889,35.302-59.52,37.148-96.361C486.538,312.853,486.538,199.147,484.382,161.177z M435.329,391.563    c-8.004,20.112-23.5,35.61-43.716,43.716c-30.273,12.009-102.108,9.236-135.562,9.236c-33.456,0-105.393,2.669-135.563-9.236    c-20.114-8.005-35.611-23.498-43.717-43.716C64.766,361.29,67.538,289.455,67.538,256s-2.669-105.391,9.234-135.562    c8.006-20.114,23.5-35.61,43.717-43.716c30.273-12.007,102.107-9.236,135.563-9.236c33.453,0,105.391-2.668,135.562,9.236    c20.113,8.002,35.609,23.5,43.716,43.716c12.007,30.272,9.237,102.107,9.237,135.562S447.336,361.392,435.329,391.563z" style="fill:url(#SVGID_1_);"/></g></g><g id="Layer_1"/></svg>
             </a>  
            </div>
    
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://www.facebook.com/profile.php?id=100092592048577">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 32 32" height="100%" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="80%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle clip-rule="evenodd" cx="16" cy="16" fill="#3B5998" fill-rule="evenodd" r="16"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22   z" fill="#FFFFFF" id="f_2_"/></g><g/><g/><g/><g/><g/><g/></svg>
               </a>
              </div>
              
              <div class="col-lg-1 d-flex align-items-center justify-content-center"><a href="https://t.me/tuintoken">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="35px" height="35px"><path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"/><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"/><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"/><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"/></svg>
              </a>
              </div>
            </div>
            <!-- <a style="background-color: gray;" href="#about" class="btn-get-started scrollto">About Us</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
          
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/tuin.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">
          <div class="justify-content-center text-center">
          <a class="nav-link scrollto" href="#buy" type="button" ><button  class="btn btn-outline-secondary"><strong>BUY $ TUIN</strong></button> </a><br><br>
        </div>
        <!--  <div class="justify-content-left text-start">-->
            
        <!--    <img style="max-width: 40px; height: auto;" src="assets/img/tuin_logo.png" class="img-fluid logo-image" alt="">-->
        <!--    <span class="text-light">Tuin Pool Address <button class="ml copy-button rounded-pill" onclick="copyToClipboarda()">Copy Address</button></span>-->
        <!--    <span style="background-color: #5d5d5d; color: #fffefe;" class="border border-light rounded-pill"><strong> 0xf376c4e00ff6e475de07b483a17fd6cf35cd62cb </strong></span><br><br>-->
        <!--    <style>-->
        <!--        .copy-button {-->
        <!--            display: inline-block;-->
        <!--            padding: 5px 10px;-->
        <!--            background-color: #4CAF50;-->
        <!--            color: white;-->
        <!--            border: none;-->
        <!--            cursor: pointer;-->
        <!--        }-->
        <!--    </style>-->
        <!--    <script>-->
        <!--        function copyToClipboarda() {-->
        <!--            const value = '0xf376c4e00ff6e475de07b483a17fd6cf35cd62cb';-->
        <!--            const tempInput = document.createElement('input');-->
        <!--            tempInput.value = value;-->
        <!--            document.body.appendChild(tempInput);-->
        <!--            tempInput.select();-->
        <!--            document.execCommand('copy');-->
        <!--            document.body.removeChild(tempInput);-->
        <!--            alert('Value copied to clipboard: ' + value);-->
        <!--        }-->
        <!--    </script>-->
            
        <!--</div>-->


      <!--  <div class="justify-content-left text-start">-->
      <!--    <img style="max-width: 40px; height: auto;" src="assets/img/tuin_logo.png" class="img-fluid logo-image" alt="">-->
      <!--    <span class="text-light">Tuin Token Address <button class="ml copy-button rounded-pill" onclick="copyToClipboard()">Copy Address</button></span><br>-->
      <!--    <span style="background-color: #5d5d5d; color: #fffefe;" class="border border-light rounded-pill"><strong> 0x6fd1be00b243bfa75f8cc4421f53c02f79c7bb60 </strong></span><br><br>-->
      <!--    <style>-->
      <!--        .copy-button {-->
      <!--            display: inline-block;-->
      <!--            padding: 5px 10px;-->
      <!--            background-color: #4CAF50;-->
      <!--            color: white;-->
      <!--            border: none;-->
      <!--            cursor: pointer;-->
      <!--        }-->
      <!--    </style>-->
      <!--    <script>-->
      <!--        function copyToClipboard() {-->
      <!--            const value = '0x6fd1be00b243bfa75f8cc4421f53c02f79c7bb60';-->
      <!--            const tempInput = document.createElement('input');-->
      <!--            tempInput.value = value;-->
      <!--            document.body.appendChild(tempInput);-->
      <!--            tempInput.select();-->
      <!--            document.execCommand('copy');-->
      <!--            document.body.removeChild(tempInput);-->
      <!--            alert('Value copied to clipboard: ' + value);-->
      <!--        }-->
      <!--    </script>-->
      <!--</div>-->
      
        
          
          
        </div>
        
      </div>
      <br><br><br>
    </div>


  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients section-bg">
    <div class="container">
      <div class="row" data-aos="zoom-in">
        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center">
          <a href="https://bscscan.com/token/0x5ff39141b1f20e2f34a36c5fa8fed88a3dc298ba"><img src="assets/img/1.png" class="img-fluid mb-4" alt="" style="max-width: auto; height: auto;"></a>
        </div>
  
        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center">
          <img src="assets/img/2.png" class="img-fluid mb-4" alt="" style="max-width: auto; height: auto;">
        </div>
  
        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center">
          <img src="assets/img/3.png" class="img-fluid mb-4" alt="" style="max-width: auto; height: auto;">
        </div>
  
        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center">
          <img src="assets/img/4.png" class="img-fluid mb-4" alt="" style="max-width: auto; height: auto;">
        </div>
  
        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center">
          <img src="assets/img/5.png" class="img-fluid mb-4" alt="" style="max-width: auto; height: auto;">
        </div>
  
        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center">
          <img src="assets/img/6.png" class="img-fluid mb-4" alt="" style="max-width: auto; height: auto;">
        </div>
      </div>
    </div>
  </section>
  <!-- End Clients Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tuin Token</h2>
          <div class="col-lg-12">
            <strong>Welcome to Tuin Token</strong><br>
            <i>a cryptocurrency project designed to bridge start-up entrepreneurs and existing business owners with Tuin Venture Capitalists (TVC). Tuin seeks to provide entrepreneurs with a decentralized, transparent, efficient, and accessible platform where they can pitch their business ideas directly to TVC funding through Tuin Tokens. Most often, people with innovative ideas find it difficult to raise capital in the current investment system due to the difficulty of finding bank loans, VC as angel investors, rigid rules of the stock market, etc. <br><br>Tuin Token was created to address this issue. Through the use of blockchain and Web 3 technology, it plans to become the leading disruptor of investment inclusion by bypassing the middleman and providing direct funding from TVC to the innovative business idea around the world.
            </i>
          </div>
        </div>
<br>
<style>.rounded-circle{
  border:1px solid;
  border-radius:50%;
  width:100px;
  height:100px;
  }</style>
      <div class="row content">
        <div class="col-md-4 text-center">
          <img src="assets/img/11.png" class="border border-warning rounded-circle" alt="Cinque Terre" width="304" height="236"> 
          <h1 class="mt-3"> $5M to $5B</h1>
          <p>Execute your idea with Tuin capital</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="assets/img/12.png" class="border border-warning rounded-circle" alt="Cinque Terre" width="304" height="236">
          <h1 class="mt-3">No</h1> 
          <p>Interest, strict regulation and bank form registrartion</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="assets/img/13.png" class="border border-warning rounded-circle" alt="Cinque Terre" width="304" height="236"> 
          <h1 class="mt-3">+2,000 </h1> 
          <p>$Tuin Token Holders</p>
        </div>
      </div>
       <!--  <div class="row content">
          <div class="col-lg-6">
            <strong>Who We Are</strong><br>
            <i class="text-justify">
              “We are a team of passionate blockchain enthusiasts, developers, and industry experts dedicated 
to driving the adoption of digital currencies and empowering individuals to take control of their financial future. With a deep understanding of the blockchain ecosystem, we strive to create an inclusive and accessible platform that brings the benefits of cryptocurrency to users worldwide.”
            </i>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <strong>Our Vision</strong><br>
            <i class="text-justify">
              “Our vision is to be a leading player in the cryptocurrency market, 
              offering innovative solutions and cutting-edge technologies that empower individuals to thrive in the digital economy. We aim to create a trusted and transparent ecosystem where users can confidently engage in cryptocurrency transactions, investment, and trading.”
            </i>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div> -->

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-start">
            <h3 class="text-center">"Buy and make your Tuin Token work for you"</h3>
          <p class="text-center text-dark"><strong>-Tuin Fund with crypto standard-
            </strong></p>  
          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div> -->
        </div>
      </div>
    </section><!-- End Cta Section -->

     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">


        <div class="section-title">
          <h4><strong><a style="display: inline-block; padding-left: 30px; padding-right: 30px;" class="nav-link scrollto btn btn-outline-secondary wide-button" href="#team">Meet The Team</a></strong></h4>
          <h4><strong><a href="\assets\file\White_Paper._Tuin_1.pdf" download style="display: inline-block; padding-left: 30px; padding-right: 30px;" class="nav-link scrollto btn btn-outline-secondary wide-button" href="#team">Read Whitepaper</a></strong></h4><br>

          <i><strong>"Let's growth with Tuin."</strong></i>
        </div>

        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Our Value <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      To be ethical, fair, and transparent in Tuin Token missions and to always be accountable to Tuin community members.
                    </p>
                  </div>
                </li>

             

              </ul>
            </div>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">


            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-5">Our Vision <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      The Tuin vision goes beyond providing a bridge for the Tuin investment ecosystem. It is also intended that Tuin token capital will provide a contribution to the world since it will be the first venture capital to have a crypto standard, which is similar to what the USD dollar and its gold standard were before they were changed into fiat money. All the businesses that operate within Tuin's ecosystem will be fundamental to the price of Tuin Token in the market as long as Tuin helps people grow their businesses. Not only that, Tuin is also hoping to provide an online marketplace for start-ups and established companies to market and sell their products, using Tuin Tokens as the currency in order to avoid inflationary pressures. The outreach component is part of the long-term roadmap for Tuin.
                    </p>
                    <p>Your support will enable Tuin Token to transform the fortunes of the investment ecosystem throughout the world, while creating a new entrepreneur, boosting existing business growth, and producing great investors as well as giving everyone the right to grow together.</p>
                  </div>
                </li>

               

              </ul>
            </div>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-3">Tuin Token Offer <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    
                    <p> <strong> Token Benefits for Investors</strong> <br><br> 
                    1. Investment Opportunities: Token holders have access to a diverse range of investment opportunities in various business ideas and projects. <br>
                    2. Diversification: Investing in the token allows for portfolio diversification across different industries and sectors. <br>
                    3. Early Access: Investors gain early access to promising business ideas and projects with significant growth potential. <br>
                    4. Liquidity: The token can be easily bought and sold on open markets, providing liquidity to investors. <br>
                    5. Transparency: Blockchain technology ensures transparency and traceability of investments.
                    </p><br><br>
                      
                    <p> <strong> Token Benefits for Entrepreneurs </strong> <br><br> 
                      1. Access to Capital: Entrepreneurs can raise funds by offering tokens, providing an alternative financing option with a broader investor base. <br>
                      2. Cost-Effective Fundraising: Token offerings are a cost-effective method compared to traditional fundraising avenues like venture capital or IPOs. <br>
                      3. Global Reach: Token offerings attract investors globally, expanding the entrepreneur's reach and exposure. <br>
                      4. Community Building: Token holders form an engaged community that offers feedback, support, and advocacy for the entrepreneur's project. <br>
                      5. Incentivized Participation: Tokens can incentivize active participation and contribution from holders, boosting the project's success.

                      </p>
                  </div>
                </li>

             

              </ul>
            </div>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">


            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-4">How Tuin Tokens Work <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    
                    <p> <strong> For Investors</strong> <br><br> 
                    1. Purchase Tokens: Investors need to acquire the tuin tokens through a token sale or exchange. <br>
                    2. Platform Signup: After acquiring tokens, investors sign up on our platform to gain access to the available business ideas. <br>
                    3. Explore and Analyze: Investors can search and analyze the business ideas listed on the platform, considering factors such as market potential, growth prospects, and alignment with their investment goals. <br>
                    4. Communication: Investors can engage in discussions and schedule meetings with the idea owners to gain a deeper understanding of the project. <br>
                    5. Stake Tokens: Once confident in an idea, investors have the option to stake their tokens on that particular business idea, indicating their interest and commitment to supporting its development. <br>
                    6. Monitor and Participate: Investors can actively monitor the progress of the project, provide feedback, and contribute their expertise or resources when needed. <br>
                    7. Potential Returns: If the business idea succeeds, investors may benefit from the growth and success of the project, potentially receiving returns on their investment. <br>
                    </p><br><br>
                      
                    <p> <strong> For Entrepreneurs </strong> <br><br> 
                      1. Purchase Tokens: Entrepreneurs need to acquire the tuin tokens through a token sale or exchange to participate in the platform. <br>
                      2. Platform Signup: Entrepreneurs sign up on our platform to gain access to upload their business ideas. <br>
                      3. Idea Submission: Entrepreneurs can upload their business ideas onto the platform, providing detailed information about the concept, market analysis, and growth potential. <br>
                      4. AI Filtration: The platform employs AI algorithms to analyze and filter the uploaded ideas based on predetermined criteria, ensuring quality and viability. <br>
                      5. Idea Display: Selected business ideas are showcased on the platform's front page, increasing visibility and attracting potential investors.<br>
                      6. Investor Interaction: Entrepreneurs engage in discussions and meetings with interested investors, addressing their questions, concerns, and collaborating on further development..<br>
                      7. Funding and Development: If investors show interest and stake tokens in an idea, entrepreneurs receive the necessary funding to develop and execute their business plan.<br>
                      8. Progress Updates: Entrepreneurs provide regular updates on the project's progress, keeping investors informed about milestones, achievements, and challenges.<br>
                      9. Potential Success: Successful implementation of the business idea can lead to growth, revenue generation, and potential rewards for the entrepreneur and investors involved.<br>

                      </p>
                  </div>
                </li>

             

              </ul>
            </div>

          </div>

       </div>
       

      </div>
    </section><!-- End Why Us Section -->

     <!-- ======= Cta Section ======= -->
     <section style="background-color: white" class="clients section-bg" id="buy">
      <div class="container" data-aos="zoom-in">
        
        <div class="section-title">
          <h2>Where to Buy</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center text-lg-start">
            <div class="justify-content-center text-center">
              <a href="{{ url('/buy') }}">
              <button type="button" class="btn btn-outline-warning"><img src="assets/img/TUINSWAP-removebg-preview.png" class="img-fluid animated mb-4 " alt="" style="width:300px;height:auto;">  </button><br><br>
            </a>
            </div>  
          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div> -->
        </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients_2" class="clients section-bg">
      <div class="">

        <div class="section-title">
          <h2>Partner</h2>
          <p>Keep in update</p>
        </div>

        <!-- <div class="row" data-aos="zoom-in">
          <div class="d-flex justify-content-center">
            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <img src="assets/img/1.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">  
            </div>

            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <img src="assets/img/2.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">  
            </div>

            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <img src="assets/img/3.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">  
            </div>

            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <img src="assets/img/4.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">  
            </div>

            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <img src="assets/img/5.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">  
            </div>

            <div class="col-lg-2 d-flex align-items-center justify-content-center">
              <img src="assets/img/6.png" class="img-fluid animated mb-4" alt="" style="width:auto;height:auto;">  
            </div>
  
          </div>
        </div> -->
        <br><br><br>
      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>News</h2>
          <p>Keep in update</p>
        </div>

        <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Market</li>
          <li data-filter=".filter-card">Comunity</li>
          <li data-filter=".filter-web">Development</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div> -->

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>How to Buy Tuin Token</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Create a Wallet <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Go to metamask.io, install the extension in your browser (or install the mobile app on your iPhone or Android device) and follow the steps to set up your Ethereum wallet. It is important to pay close attention to your unique "Seed Phrase". Ideally, you should write the phrase down and store it in a safe, secure, and memorable location.  
                    </p> <br>
                    <a href="https://www.youtube.com/watch?v=8UAz1FyK3-4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>  
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> To up your wallet <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Buy Ethereum directly from Metamask or transfer funds from an exchange (Binance, Crypto.com, Coinbase).  
                    </p> <br>
                    <a href="https://www.youtube.com/watch?v=FMTYAMPQzSk" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>  
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Connect Your Wallet to The DEX <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      You must be connected to TuinSwap. Visit the (Tuin Website link) in Google Chrome or in the browser within the Metamask application. Ensure that your wallet is connected. Paste the $Tuin token address into TuinSwap, select Tuin, and confirm the transaction. If Metamask prompts you to sign your wallet, please do so.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Trade USDT/BUSD/USDC to Tuin Token <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Input the amount of USDT/BSUD/USDC you would want to trade. Remember to leave some funds in your wallet for “GAS Fees” which is the fuel of the transaction. Then click “Swap”
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>05</span> You have swapped your USDT/BUSD/USDC to Tuin Token! <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Congratulations! You are now a holder of Tuin Token!A transaction may take between 30 seconds and an hour. If you have any questions, please feel free to contact us via telegram or discord
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/tuin_g.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta_2" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-7 text-center ">
            <h3>Sign the Tuin Token Manifesto on Twitter!</h3>
            <a target="_blank" class="cta-btn align-middle" href="https://twitter.com/intent/tweet?text='I'm signing the TuinToken Manifesto! @TuinToken @TT https://tuintoken.com/ #TuinTokenManifesto '"><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 32 32" height="100%" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="10%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.993,6.077C30.816,6.6,29.552,6.953,28.223,7.11c1.355-0.812,2.396-2.098,2.887-3.63  c-1.269,0.751-2.673,1.299-4.168,1.592C25.744,3.797,24.038,3,22.149,3c-3.625,0-6.562,2.938-6.562,6.563  c0,0.514,0.057,1.016,0.169,1.496C10.301,10.785,5.465,8.172,2.227,4.201c-0.564,0.97-0.888,2.097-0.888,3.3  c0,2.278,1.159,4.286,2.919,5.464c-1.075-0.035-2.087-0.329-2.972-0.821c-0.001,0.027-0.001,0.056-0.001,0.082  c0,3.181,2.262,5.834,5.265,6.437c-0.55,0.149-1.13,0.23-1.729,0.23c-0.424,0-0.834-0.041-1.234-0.117  c0.834,2.606,3.259,4.504,6.13,4.558c-2.245,1.76-5.075,2.811-8.15,2.811c-0.53,0-1.053-0.031-1.566-0.092  C2.905,27.913,6.355,29,10.062,29c12.072,0,18.675-10.001,18.675-18.675c0-0.284-0.008-0.568-0.02-0.85  C30,8.55,31.112,7.395,31.993,6.077z" fill="#55ACEE"/><g/><g/><g/><g/><g/><g/></svg>Tweet!</a>
          
          </div>
          <div class="col-lg-5 cta-btn-container text-justify">
            <p> <div style="font-weight: normal;">We are Tuin Token, one of the most influential contributors to the crypto-movement and mankind's advancement. <br> <br>

              We are engaged in the development of a fair people's currency on which anyone can have a business and participate in the venture capital market. Our engagement has led us to value: <br> <br>
         
              <div style="font-weight: 	Bold;">Being trustworthy,</div> we always trust others, as trust is the cornerstone of any successful business. <br> 
             
              <div style="font-weight: 	Bold;">Being optimistic,</div> we value having a positive outlook, expectation, or attitude towards life, events, or the future. <br> 
              
              <div style="font-weight: 	Bold;">Being resilient,</div> we value being able to bounce back, recover, or adapt to adversity. <br> <br>
              
              To put it another way, we value both sides equally.
            </div>
              </strong>
            
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

     <!-- ======= Why Us Section ======= -->
     <section id="why-us_2" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          

          <div class="col-lg-5 text-center">&nbsp; <img src="assets/img/ggg.png" class="img-fluid" alt=""></div>
        
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  ">

          <div class="content">
            <h3><strong>Tokenomics</strong></h3>
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p> -->
            <h1>Token Supply: 7B of Tuin Token</h1>
            <p>It is tax-free and does not incur bank interest. As easy as flipping your hand, you can start your own business. A total of 5B tokens have been sent to the liquidity pool, LP tokens have been burnt, and the contract has been renounced. Tuin's remaining 2B are reserved for dedicated team members, visionary advisors, and early investors who believe in the project's transformative potential.</p>
          </div>
         
         <!--  <div class="accordion-list">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Create a Wallet <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                  <p>
                    Go to metamask.io, install the extension in your browser (or install the mobile app on your iPhone or Android device) and follow the steps to set up your Ethereum wallet. It is important to pay close attention to your unique "Seed Phrase". Ideally, you should write the phrase down and store it in a safe, secure, and memorable location.  
                  </p> <br>
                  <a href="https://www.youtube.com/watch?v=8UAz1FyK3-4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>  
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> To up your wallet <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Buy Ethereum directly from Metamask or transfer funds from an exchange (Binance, Crypto.com, Coinbase).  
                  </p> <br>
                  <a href="https://www.youtube.com/watch?v=FMTYAMPQzSk" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>  
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Connect Your Wallet to The DEX <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    You must be connected to TuinSwap. Visit the (Tuin Website link) in Google Chrome or in the browser within the Metamask application. Ensure that your wallet is connected. Paste the $Tuin token address into TuinSwap, select Tuin, and confirm the transaction. If Metamask prompts you to sign your wallet, please do so.
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Trade USDT/BUSD/USDC to Tuin Token <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Input the amount of USDT/BSUD/USDC you would want to trade. Remember to leave some funds in your wallet for “GAS Fees” which is the fuel of the transaction. Then click “Swap”
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>05</span> You have swapped your USDT/BUSD/USDC to Tuin Token! <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Congratulations! You are now a holder of Tuin Token!A transaction may take between 30 seconds and an hour. If you have any questions, please feel free to contact us via telegram or discord
                  </p>
                </div>
              </li>

            </ul>
          </div> -->

        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Roadmap</h2>
          <p>Proposed Roadmap</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Phase 1 :</h3>
              <!-- <h4><sup>$</sup>0<span>per month</span></h4> -->
              <ul>
                <li><i class="bx bx-check"></i> Token and Website Development</li>
                <li><i class="bx bx-check"></i> Launch to TuinSwap Defi's</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Safety improved (Audit Team KYC and LP locked)</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> First CEX listing</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Launch to Uniswap and PancakeSwap DeFi's</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Legal entity set up</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Bridge to BSC</li>
              </ul>
              <!-- <a href="#" class="buy-btn">Get Started</a> -->
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Phase 2 :</h3>
              <!-- <h4><sup>$</sup>0<span>per month</span></h4> -->
              <ul>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Tuincast (Weekly Podcast)</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> My Tuin (Tuin Token Investment Website and Apps)</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> SafeMoon Swap listing</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Upgrades to the legal entity</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Binance and Bitmart Exchange Platform listing</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Listing other tokens to TuinSwap DeFi's</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> TuinDAO (Decentralized Autonomous Organization) formation</li>
              </ul>
              <!-- <a href="#" class="buy-btn">Get Started</a> -->
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Phase 3 :</h3>
              <!-- <h4><sup>$</sup>0<span>per month</span></h4> -->
              <ul>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> My Tuin 2.0 (Online Marketplace for Business in Tuin Sytem)</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Listing other tokens to TuinSwap DeFi's</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> Expansion of the governance system</li>
                <li><i class="bx bx-right-arrow-alt text-secondary"></i> My Tuin 3.0 (Star-Up Exchange Platform)</li>
              </ul>
              <!-- <a href="#" class="buy-btn">Get Started</a> -->
            </div>
          </div>

          <!-- <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <i><strong>“Tuin Token offers a range of comprehensive services to meet your cryptocurrency needs. 
            With our innovative platform and cutting-edge technologies, we empower individuals and businesses to explore, invest, and engage in the world of digital currencies. Discover the services we provide:”</strong></i>
        </div>

        <div class="row mb-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-currency-bitcoin"></i></div>
              <h4><a href="">Cryptocurrency Exchange</a></h4>
              <p>Experience seamless and secure cryptocurrency trading on our intuitive exchange platform. Buy, sell, and trade Tuin with ease. Benefit from real-time market data, advanced order types, and competitive fees as you navigate the exciting world of digital assets.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-wallet"></i></div>
              <h4><a href="">Wallet Services</a></h4>
              <p>Safeguard your cryptocurrencies with our secure wallet solutions. Our wallets provide a reliable and user-friendly way to store, send, and receive digital currencies. Rest assured that your funds are protected through advanced encryption and multi-factor authentication measures.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-receipt"></i></div>
              <h4><a href="">ICO and Token Sale Support</a></h4>
              <p>If you're planning to launch an Initial Coin Offering (ICO) or a token sale, we provide comprehensive support to help you navigate the process. From token issuance and smart contract development to marketing and compliance guidance, we'll assist you at every step.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-auto d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-info-square"></i></div>
              <h4><a href="">Blockchain Consulting</a></h4>
              <p>Tap into our expertise with our blockchain consulting services.
                Whether you're a business exploring blockchain integration or an individual seeking guidance on decentralized applications, our knowledgeable team is here to provide strategic advice and technical insights</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-auto d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4><a href="">Educational Resources</a></h4>
              <p>We believe in empowering our users with knowledge.
                Access our educational resources, including articles, tutorials, and guides, to enhance your understanding of cryptocurrencies, blockchain technology,
                and the latest trends in the industry. Stay informed and make informed decisions.</p>
            </div>
          </div>
        </div>

      </div>
    </section> --><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-7 text-center text-lg-start">
            <h3>Tuin Token - Empowering You with Data-Driven Decision Making</h3>
          <i><strong>“Start leveraging the power of data with Tuin Token's analytics platform. 
            Gain insights, track market trends, and make smarter investment decisions. 
            Join us today and take your cryptocurrency trading to the next level.”
            </strong></i>  
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> --><!-- End Cta Section -->


    <!-- ======= Why Us Section ======= -->
   <!--  <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">


        <div class="section-title">
          <h2>BUY AND SELL</h2>
          <i><strong>"Welcome to the Tuin Token buy and sell platform,
            where you can seamlessly trade cryptocurrencies with ease and confidence.
            Our secure and user-friendly platform empowers you to buy and sell your favorite digital assets,
             making it simple to navigate the exciting world of cryptocurrencies."</strong></i>
        </div>

        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Wide Range of Business ideas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Explore a diverse selection of business ideas to invest and yield return. From popular or trending business plans, our platform offers a wide range of digital assets for you to trade and invest in. 
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Simple and Intuitive Interface: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Our platform features a user-friendly interface designed to simplify your investing and trading experience. With easy-to-use navigation, intuitive order placement, and real-time market data, you can execute trades and invest seamlessly, even if you're new to cryptocurrency trading. 
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Secure and Reliable <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      We prioritize the security of your funds and personal information.
                      Our platform incorporates industry-leading security measures, including robust encryption and multi-factor authentication, to ensure a safe investing and trading environment. Trade and invest with confidence, knowing that your assets are protected.                        
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Instant Order Execution<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Take advantage of our advanced investing engine that ensures swift and accurate order execution. Instanstly stacking on business ideas and buying or selling Tuin Tokens, allowing you to seize opportunities and react to market movements promptly. 
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">


            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-5"><span>05</span>Competitive Pricing <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      We strive to provide competitive pricing and fair trading fees.
Our transparent fee structure ensures that you can maximize your trading profits without hidden charges or surprises. Enjoy affordable trading with Tuin Token.  
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed"><span>06</span> Order Types and Advanced Trading Tools <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Customize your trading strategies with various order types, including market orders, limit orders, and stop-loss orders. Access advanced trading tools, such as price charts, technical indicators, and order books, to analyze market trends and make informed decisions. 
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed"><span>07</span> Secure Wallet Integration <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Easily connect your digital wallet to our platform for seamless transactions.Our platform supports popular wallet integrations, ensuring a convenient and secure trading experience.  
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapsed"><span>08</span> 24/7 Customer Support: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Our dedicated customer support team is available 24/7 to assist you with any questions or concerns.
                      Whether you need help with placing trades, understanding platform features, or resolving account-related issues,
                      we're here to provide prompt and reliable support. 
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

       </div>

      </div>
    </section> --><!-- End Why Us Section -->

     <!-- ======= Cta Section ======= -->
     <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-7 text-center text-lg-start">
            <h3>Start trading and investing Tuin Token today.</h3>
          <i><strong>"Join our platform and experience a seamless and secure way to buy and sell digital assets. 
            Take advantage of our user-friendly interface, competitive pricing, and robust features to unlock 
            the potential of cryptocurrency trading.”
            </strong></i>  
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Tuin Token
            </a>
          </div>
        </div>

      </div>
    </section> --><!-- End Cta Section -->

     <!-- ======= Skills Section ======= -->
    <!--  <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>ROADMAP</h3>
            <p class="fst-italic">
            </p>

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button style="background-color: #F5C862;"  class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Phase 1: Foundation (Q1 2023 - Q2 2023)
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   <div class="row">
                    <div class="col-md-1">
                      <p>•</p>
                      <p>•</p>
                      <p>•</p>
                    </div>
                    <div class="col-md-10">
                      <small>Launch of Tuin Token platform: Introduce our user-friendly and secure platform for investing, buying, selling, and trading cryptocurrencies.
                      </small>
                      <small>
                        Establish partnerships: Collaborate with leading blockchain projects and exchanges to expand our coin offerings and liquidity options.
                      </small>
                      <small>
                        Build a strong community: Engage with our users through social media channels, forums, and educational content to foster a vibrant and supportive community.
                      </small>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button style="background-color: #F5C862;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Phase 2: Enhanced Features (Q3 2023 - Q4 2023)
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-md-1">
                        <p>•</p>
                        <p>•</p>
                        <p>•</p>
                        <p>•</p>
                      </div>
                      <div class="col-md-10">
                        <small>Margin trading: Introduce margin trading functionality, allowing users to amplify their trading positions and potential returns.
                        </small>
                        <small>
                          Advanced order types: Implement advanced order types, including stop-limit orders and trailing stop orders, to provide more flexibility in trading strategies.  
                        </small>
                        <small>
                          Mobile app development: Launch a mobile application for iOS and Android devices, enabling users to trade on the go and access their accounts with ease. 
                        </small>
                        <small>
                          Fiat on-ramp: Integrate a fiat on-ramp feature, allowing users to purchase Tuin Token directly using fiat currencies.  
                        </small>
                      </div>
                     </div>  
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button style="background-color: #F5C862;"  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Phase 3: Expansion (2024 and Beyond)
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-md-1">
                        <p>•</p>
                        <p>•</p>
                        <p>•</p>
                        <p>•</p>
                      </div>
                      <div class="col-md-10">
                        <small>Global expansion: Expand our services to new markets and regions, enabling users from around the world to access our platform and trade or invest Tuin Token .
                        </small>
                        <small>
                          DeFi integration: Explore partnerships and integrations with decentralized finance (DeFi) protocols to offer our users access to a wider range of financial products and services.  
                        </small>
                        <small>
                          Enhanced security measures: Continuously improve our security infrastructure to safeguard user funds and personal information, leveraging the latest advancements in blockchain technology.  
                        </small>
                        <small>
                          Advanced analytics: Develop advanced analytics tools and features to provide users with in-depth market insights, real-time data analysis, and personalized trading recommendations.  
                        </small>
                      </div>
                     </div>   
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
<br><br>
        <div class="row">
          <div class="col-md-12">
              <p style="border-radius: 25px;
              background: #F5C862;
              padding: 20px;
              width: auto;
              height: auto;" >"We are excited about the future of Tuin Token and are dedicated to delivering a seamless and rewarding experience for our users. Our roadmap reflects our commitment to continuous improvement, innovation, and customer satisfaction. Stay tuned as we embark on this exciting journey together."</p>
          </div>
          <div class="col-md-12">
              <p class="text-light" style="border-radius: 25px;
              background: red;
              padding: 20px;
              width: auto;
              height: auto;"><strong>Disclaimer:</strong>  “The roadmap provided is a general overview of our planned developments 
                and may be subject to change based on market conditions, technological advancements, and regulatory requirements. We will update our community regularly to ensure transparency and keep you informed of any updates or modifications to our roadmap.”
                </p>
          </div>
        </div>

      </div>
    </section> --><!-- End Skills Section -->

    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>At Tuin Token, we are proud to have a diverse and talented team dedicated to revolutionizing the world of digital assets. Our team is comprised of industry experts, visionaries, and technology enthusiasts who share a common goal <br> <strong><i>"to provide innovative solutions and exceptional service to our users."</i></strong>  
            </p>
        </div>

        <div class="row">

          <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/surry.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Surry Rahmandika</h4>
                <span>Chief Executive Officer <br><a href = "mailto: surry.rahmandika@tuintoken.com">surry.rahmandika@tuintoken.com</a></span>
                <p></p>
                <!-- <p>As the CEO of Tuin Token, Surry brings a wealth of experience in the cryptocurrency industry.
                  With a strong background in finance and a passion for blockchain technology, he leads the company's strategic direction and ensures that Tuin Token remains at the forefront of the market.                  
                  </p> -->
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/taufik.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Taufik Ramadhan</h4>
                <span>Chief Technology Officer <br><a href = "mailto: muhammad.ramadhan@tuintoken.com">muhammad.ramadhan@tuintoken.com</a></span>
                <!-- <p>As our Chief Technology Officer, Taufik is responsible for driving the technical vision and strategy of Tuin Token. With his deep knowledge of blockchain technology and software development, he ensures that our platform remains secure, scalable, and cutting-edge.
                </p> -->
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/joe.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Zhou Chenxing</h4>
                <span>Chief Creative Officer <br><a href = "mailto: zhou.chenxing@tuintoken.com">zhou.chenxing@tuintoken.com</a></span>
                <!-- <p>Joe serves as our Chief Creative Officer, responsible for overseeing the creative direction and brand identity of Tuin Token. With his innovative mindset and artistic vision, he ensures that Tuin Token delivers a compelling and cohesive brand experience to our users.
                </p> -->
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


  

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>COMMUNITY</h2>
          <strong>Welcome to the Tuin Token Community! 
          </strong>
          <p>We believe that a strong and engaged community is the heart of any successful project. 
            Here, you can connect with like-minded individuals, share your thoughts, and stay up-to-date with the latest news and updates.
            </p>
        </div>
     
        <div class="faq-list">
          <strong>Why Join Our Community?</strong>
          <br><br>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Engage with Fellow Enthusiasts <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Connect with a diverse community of cryptocurrency enthusiasts, traders, and investors who share a common passion for blockchain technology and digital assets.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Stay Informed <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                 Be the first to know about the latest developments, product updates, and announcements from Tuin Token.Our community members are always at the forefront of exciting news and insights
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Educational Resources <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Expand your knowledge and understanding of cryptocurrencies through our educational resources. We provide guides, tutorials, and informative content to help you navigate the world of digital assets with confidence
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Exclusive Events and Promotions <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Gain access to exclusive events, webinars, and promotions designed specifically for our community members. Get involved in exciting giveaways, contests, and rewards programs as we show our appreciation for your support.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Support and Assistance<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Our community is here to support you on your journey. Whether you have questions, need technical assistance, or want to engage in discussions, our friendly community members and dedicated support team are ready to assist you.
                  
                </p>
              </div>
            </li>

          </ul>
        </div>
<br><br><br>
        <div class="faq-list">
          <strong>How to Get Involved?</strong>
          <br><br>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Join our social media channels <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Follow us on Twitter, Facebook, LinkedIn, Telegram, instagram and Discord to stay connected and receive real-time updates from the Tuin Token team.
                  Engage in conversations, share your insights, and connect with other community members
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Participate in Our Forums <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Visit our community forums to engage in discussions, ask questions, and share your experiences. It's a great place to connect with fellow users, learn from their expertise, and contribute to the growth of our community.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Spread The Word: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Help us grow our community by sharing Tuin Token with your friends, colleagues, and networks. Together, we can create a vibrant and supportive community that drives the future of cryptocurrencies.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Looking for a way to contact us? We would be delighted to hear from you. Here is how you can contact us.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
             <!--  <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div> -->

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>tuin@tuingroup.company</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 85763047112</p>
              </div>

              </div>

          </div>

           <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> 

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
<!-- 
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          test

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div> -->

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Tuin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>