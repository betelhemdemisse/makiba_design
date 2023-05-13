<html lang="en"><head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>makiba design and construcion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

  
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/js/main.js"></script>
<style>
  .animation{
  width: 400px;
  height: 150px;
  background-color: transparent;
  position: relative;
  animation-name: example;
  animation-duration: 5s;
  animation-timing-function: linear;
  animation-delay: 2s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

@keyframes example {
  0%   {background-color:transparent; left:0px; top:0px;}
  25%  {background-color:transparent; left:200px; top:0px;}
  50%  {background-color:transparent; left:200px; top:200px;}
  75%  {background-color:transparent; left:0px; top:200px;}
  100% {background-color:transparent; left:0px; top:0px;}
}
</style>
</head>
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
  <header id="header" class="header d-flex align-items-center"style=>
    {{-- <h1><img src="/assets/img/makiba_archtech_logo.jpg" style="width:40%;" alt=""></h1> --}}
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
         
        
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="{{route('user.home')}}" class="active">Makiba</a></li>
  
            <li><a href="{{route('users.portfolio')}}" >portfolio</a></li>
            <li class="dropdown"><a href="{{route('user.contract')}}"><span>contract works</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('user.metal')}}">Metal Work</a></li>
                  <li><a href="{{route('user.gybsum')}}">gypsum Work</a></li>
                  <li><a href="{{route('user.sanitary')}}">sanitary Work</a></li>
                  <li><a href="{{route('user.electrical')}}">electrical Work</a></li>
                </ul>
              </li>
            <li class="dropdown"><a href="{{route('user.Furnitures')}}"><span>furnitures</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('user.contract')}}">Order Custom Makiba Furnitures</a></li>
                  <li><a href="{{route('user.Sofa')}}">Sofa</a></li>
                  <li><a href="{{route('user.Bed')}}">Bed</a></li>
                  <li><a href="{{route('user.Wardrop')}}">Wardrop</a></li>
                  <li><a href="{{route('user.Dinning_Table')}}">Dinning Table</a></li>
                  <li><a href="{{route('user.Tv_Stand')}}">Tv Stand</a></li><li>
                  <li><a href="{{route('user.Coffee_table')}}">Coffee table</a></li>
                  <li><a href="{{route('user.Shelf')}}">Shelf</a></li>
                  <li><a href="{{route('user.Office_Table')}}">Office Table</a></li>
                  <li><a href="{{route('user.Kitchen_Cabinet')}}">Kitchen Cabinet</a></li>
                </ul>
              </li>
            <li class="dropdown"><a href="{{route('user.design_and_construction')}}"><span>design and construction</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="{{route('user.Residential_Design')}}">Residential Design</a></li>
                <li><a href="{{route('user.Commercial_Design')}}">Commercial Design</a></li>
                <li><a href="{{route('user.3D_Modeling_Rendering')}}">3D Modeling Rendering</a></li>
                
              </ul>
            </li>
            <li><a href="{{route('user.contact')}}">Contact</a></li>
            <li><a href="{{route('user.login')}}">login as admin</a></li>
          </ul>
        </nav>
      </div>
</header>
<section id="hero" class="hero">
  <div class="info d-flex align-items-left">
    <div class="container" >
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
         <div class="animation"style="font-size:35;margin-bottom:20%;margin-top:20%;color:white;">
             MAKIBA DESIGN AND CONSTRUCTION     
         </div>
        </div>
      </div>
    </div>
  </div>

  <div id="hero-carousel" class="carousel slide pointer-event" style="100%" data-bs-ride="carousel" data-bs-interval="2000">

    <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
    <div class="carousel-item active" style="background-image: url(/assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
    <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section>
<main>
  <div>
    <section id="team" class="team">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Our services</h2>
        </div>

        <div class="row gy-5">

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="/storage/images/{{{$images['0']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Bed</h4>
              <span>furniture</span> 
                 </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="/storage/images/{{{$images['1']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sofa</h4>
              <span>furniture</span> 
                </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="/storage/images/{{{$images['2']['image']}}}" class="img-fluid" alt="">
              <div class="social">
                <a href="{{route('user.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
               
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Tv Stand</h4>
              <span>furniture</span> 
               </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="/storage/images/{{{$images['3']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Dinning Table</h4>
              <span>furniture</span> 
              </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="/storage/images/{{{$images['4']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.metal')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Metal Works</h4>
              <span>contract works</span> 
              </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/storage/images/{{{$images['5']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.sanitary')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>sanitary works</h4>
              <span>contract works</span> 
             </div>
          </div><!-- End Team Member -->
          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/storage/images/{{{$images['6']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.gybsum')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>gybsum works</h4>
              <span>contract works</span> 
             </div>
          </div>  <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/storage/images/{{{$images['7']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('user.electrical')}}"><i class="bi bi-link-45deg"></i>see more</a>


              </div>
            </div>
            <div class="member-info text-center">
              <h4>electrical works</h4>
              <span>contract works</span> 
             </div>
          </div>
        </div>

      </div>
    </section>
    <section>
        <section class="class-portfolio">
          
          <section id="constructions" class="constructions">
            <div class="container aos-init" data-aos="fade-up">
        
              <div class="section-header">
                <h2>some of our woks</h2>
                <p>write something here</p>   </div>
        
              <div class="row gy-4">
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg">
                          <img src="/storage/images/{{{$images['8']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                         
                        </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Gybsum work </h4>
                           <p>this is for example</p>
                                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg">
                          <img src="/storage/images/{{{$images['9']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                     
                        </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Commercial work </h4>
                           <p>this is for example</p>
                                           </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg" >
                          <img src="/storage/images/{{{$images['10']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                     
                        </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Kitchen Cabinet work </h4>
                          
                           <p>this is for example</p>
                                          </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg">
                          <img src="/storage/images/{{{$images['11']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                      
                      </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Sanitary work</h4>
                           <p>this is for example</p>
                                           </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
              </div>
        
            </div>
          </section>
        </section> 
    </section>
    </div>
</main>

<footer id="footer" class="footer">

<div class="footer-content position-relative">
<div class="container">
  <div class="row">

    <div class="col-md-4">
      <div class="footer-info">
        <h3>makiba design and construction</h3>
        <p>
         Addis Ababa, Ethiopia<br>
          <strong>Phone:</strong> +2519-53-94-28-85   
         <p style="margin-left: 45px;">+2519-13-40-69-25</p> 
          <strong>Email:</strong>natanemzemariam@gmail.com<br>
        </p>
        <div class="social-links d-flex mt-3">
          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End footer info column-->


    <div class="col-md-4 footer-links">
      <h4>Our Services</h4>
      <ul>
             <li><a href="{{route('user.contract')}}">contract works</a></li>
              <li><a href="{{route('user.Furnitures')}}">furniture</a></li>
              <li><a href="{{route('user.design_and_construction')}}">design and construction</a></li>    
      </ul>
    </div><!-- End footer links column-->

    <div class="col-md-4 footer-links">
      <img src="/assets/img/makiba.png" class="img-fluid" alt="">
     
     
    </div><!-- End footer links column-->

    

  </div>
</div>
</div>

<div class="footer-legal text-center position-relative">
<div class="container">
  <div class="copyright">
    © Copyright <strong><span>makiba design and construction</span></strong>
  </div>
  <div class="credits">
  </div>
</div>
</div>

</footer>


</body>
</html>