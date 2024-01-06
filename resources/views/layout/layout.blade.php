<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rajasthan Ujala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png" rel="icon')}}/">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"/>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  
  <link href="{{ URL::asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet">
 
  <link href="{{ asset('public/assets/css/variables.css')}}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
th, td {
  border: 1px solid black;
  border-collapse: collapse;
}



    a:link {
      color: white!important;
      background-color: transparent;
      text-decoration: none;
    }

    a:visited {
      color: white!important;
      background-color: transparent;
      text-decoration: none;
    }

    a:hover {
      color: white!important;
      background-color:transparent ;
      text-decoration: underline;
    }

    a:active {
      color: white!important;
      background-color: transparent;
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top ">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid">
      <div class=" container-xl d-flex align-items-center ">
        <a href="{{url('/')}}" class="logo d-flex align-items-center">
			<h3 style="color: aliceblue;">Rajasthan Ujala</h3></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-collapse" aria-controls="navbar-collapse" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

    
  </button> 
<div class="collapse navbar-collapse  justify-content-between" id="navbar-collapse">
        <ul class="navbar-nav mr-2">
          <li class="nav-item"  style=" padding: 1rem 1.25rem 1.25rem 1.25rem;" ><a href="{{url('/')}}">Home</a></li>
          <li class="nav-item" style=" padding: 1rem 1.25rem 1.25rem 1.25rem;" ><a href="{{url('lastest_news')}}">Latest News</a></li>
          <li class="dropdown nav-item" style=" padding: 0.75rem 1rem 1rem 1rem;" >
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="navbarDropdown"                    aria-haspopup="true" aria-expanded="true"> Categories </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown">
              <a class="dropdown-item" href="search-result.html">Business</a>
              <a class="dropdown-item" href="search-result.html">Bollywood</a>
              <a class="dropdown-item" href="#">sports</a>
              <a class="dropdown-item" href="#">politicies</a>
              <a class="dropdown-item" href="#">Education</a>
              <a class="dropdown-item" href="#">Entertainment</a>
	  		  <a class="dropdown-item" href="#">Technology</a>
              <a class="dropdown-item" href="#">Lifestyle</a>
              <a class="dropdown-item" href="#">Classifieds</a>
            </div>
			
          </li>
          <li class="nav-item" style=" padding: 1rem 1.25rem 1.25rem 1.25rem;"><a href="{{url('blog')}}">Blog</a></li>
          <li class="nav-item" style=" padding: 1rem 1.25rem 1.25rem 1.25rem;"><a href="{{url::asset('public/assets/epaper/10.jpeg')}}">E-Paper</a></li>
          <li class="nav-item" style=" padding: 1rem 1.25rem 1.25rem 1.25rem;"><a href="{{url('gallery')}}">Gallery</a></li>
        </ul>
        <!-- .navbar -->
        <button type="button" class="btn btn-danger">
          Subscribe
      </button>
	
        <div class="position-relative" style="color: aliceblue;">
          <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
          <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
          
            
           
          
          <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
            <form action="search-result.html" class="search-form">
             
              
              <button class="btn js-search-close"><span class="bi-x"></span></button>
            </form>
          </div>
          <!-- End Search Form -->

			</div>
		</div>
    </nav>
  </header><!-- End Header -->
	
  @yield('content')







  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer bg-dark text-light pt-3" >

    <div class="footer-content">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <h3 class="footer-heading">Rajasthan Ujala</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti
              voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid
              blanditiis omnis quae. Explicabo?</p>
            <p><a href="about.html" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="{{url('/')}}"><i class="bi bi-chevron-right"></i> Home</a></li>
				<li><a href="{{url('/')}}"><i class="bi bi-chevron-right"></i>Latest News</a></li>
              <li><a href="{{url('blog')}}"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="{{url::asset('public/assets/epaper/10.jpeg')}}"><i class="bi bi-chevron-right"></i> E-Paper</a></li>
              <li><a href="{{url('single-post')}}"><i class="bi bi-chevron-right"></i>Gallery</a></li>
              <li><a href="{{url('/about')}}"><i class="bi bi-chevron-right"></i> About us</a></li>
              <li><a href="{{url('/contact')}}"><i class="bi bi-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Business</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Culture</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Sport</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Food</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Politics</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Startups</a></li>
              <li><a href="{{url('category')}}"><i class="bi bi-chevron-right"></i> Travel</a></li>

            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Recent Posts</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="{{url('/single-post')}}" class="d-flex align-items-center">
                  <img src="{{url::asset('public/assets/img/post-sq-1.jpg')}}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>5 Great Startup Tips for Female Founders</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="{{url('single-post')}}" class="d-flex align-items-center">
                  <img src="{{url::asset('public/assets/img/post-sq-2.jpg')}}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="{{url('/')}}single-post.html" class="d-flex align-items-center">
                  <img src="{{url::asset('public/assets/img/post-sq-3.jpg')}}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="{{url('single-post')}}" class="d-flex align-items-center">
                  <img src="{{url::asset('public/assets/img/post-sq-4.jpg')}}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                      <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Rajasthan Ujala </span></strong>. All Rights Reserved
            </div>

            <div class="credits">
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
				<a href="mailto:info@Rajasthanujala.com" ><i class="bi bi-envelope"></i></a>
              <a href="https://twitter.com/RajasthanUjala" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/rajasthanujala" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/rajasthanujala?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i
                  class="bi bi-instagram"></i></a>
              <a href="https://youtube.com/@rajasthanujala1208" class="google-plus"><i class="bi bi-youtube"></i></a>
              <a href="https://wa.me/919314097226"><i class="bi bi-whatsapp"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{URL::asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{URL::asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{URL::asset('public/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{URL::asset('public/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
	

  <script src="{{URL::asset('public/assets/js/script.js') }}"></script>
	 <script src="{{URL::asset('public/assets/js/main.js')}}"></script>
</body>

</html>