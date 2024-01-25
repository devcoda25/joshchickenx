
<!DOCTYPE html>
<html lang="en">
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Josh-Chicken</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
   
  <link rel=" icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="assets/css/style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    
    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0 ">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0">
                   
                     <img src="{{ asset('assets/img/logo.png')}}" class="w-100 h-100" alt="Logo"> </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"             
              data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4" id="navbar-nav">
                 <a href="{{url('/')}}"   class="nav-item nav-link active-link ">Home</a>
                        <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{url('services')}}" class="nav-item nav-link">Service</a>
                        <a href="{{url('menu')}}" class="nav-item nav-link">Menu</a>
                        
                        <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                   
                </div>
            </nav>


        <!-- Navbar & Hero End -->

        
        

      @yield('content')


       


        


       

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-8">
                   
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Wandegeya market South Wing,Kampala</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+256 708978299</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>joshchicken@gmail.com</p>
                        <div class="d-flex pt-2">
          
 <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.phpid=100083301364448"><i class="fab fa-facebook-f"></i></a> <a class="btn btn-outline-light btn-social"href="https://www.youtube.com/@chicken100-"><i class="fab fa-youtube"></i></a>
<a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@joshchickenwandegeya"><i class="bi bi-telegram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Subscribe to our newsletter</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">joshchicken.com</a>, All Right Reserved. 

              
              Designed By <a class="border-bottom" href="https://linktr.ee/devcoda">devcoda</a><br><br>
                           
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{url('/')}}">Home</a>
                                <a href="{{url('about')}}">About</a>
                                <a href="{{url('services')}}">Services</a>
                                <a href="{{url('menu')}}">Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    </div>

  

  

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
      <script src="assets/js/navbar.js"></script>
  

  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/lib/counterup/counterup.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
  <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


    <!-- Template Javascript -->
  

</body>

</html>