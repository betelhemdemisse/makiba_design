@extends('main_header.final_header')   
@section('content')
  <main id="main">
      <section id="projects" class="projects">
        <div class="container aos-init" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Projects</h2>
            <h6>Taking your home construction to the advanced level.We build your visions, with perfection. </h6></div>
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters aos-init" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-remodeling">Remodeling</li>
              <li data-filter=".filter-construction">Construction</li>
              <li data-filter=".filter-repairs">Repairs</li>
              <li data-filter=".filter-design">Design</li>
            </ul><!-- End Projects Filters -->
  
            <div class="row gy-4 portfolio-container aos-init" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 4932px;">
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['0']['image']}}}" class="img-fluid" alt="">
                                                          
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>

                </div>
              </div><!-- End Projects Item -->
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['1']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/sanitary1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-construction" style="position: absolute; left: 0px; top: 411px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['2']['image']}}}"class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Construction 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/constructions-1 (2).jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs" style="position: absolute; left: 0px; top: 822px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['3']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Repairs 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/electrical1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-design" style="position: absolute; left: 0px; top: 1233px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['4']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Design 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
             
              <div class="col-lg-4 col-md-6 portfolio-item filter-construction" style="position: absolute; left: 0px; top: 2055px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['5']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Construction 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/gybsum3.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs" style="position: absolute; left: 0px; top: 2466px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['6']['image']}}}"class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Repairs 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-design" style="position: absolute; left: 0px; top: 2877px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['7']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Design 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>

              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-design" style="position: absolute; left: 0px; top: 2877px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['8']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Design 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/istockphoto-1264323513-170667a.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="position: absolute; left: 0px; top: 3288px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['9']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>

              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-construction" style="position: absolute; left: 0px; top: 3699px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['10']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Construction 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="//assets/img/metal1.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs" style="position: absolute; left: 0px; top: 4110px;">
                <div class="portfolio-content h-100">
                  <img src="/storage/images/{{{$images['11']['image']}}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Repairs 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="/assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
             
            </div>
          </div>
        </div>
      </section>
      <section id="services" class="services section-bg"style="background-color:rgb(231, 231, 144)">
        <div class="container aos-init" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Services</h2>
            <p>Discover Makiba Design and Construction experience! Our team specializes in contract works, furnitures, 3D modeling and commercial design to bring your vision to life. Let us help you create the perfect space for your dream project.</p>
  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-mountain-city"></i>
                </div>
                <h3>contract works</h3>
                {{-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p> --}}
                <a href="{{route('user.contract')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
           
            <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fas fa-couch"></i>
                </div>
                <h3>furnitures</h3>
                {{-- <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p> --}}
                <a href="{{route('user.contract')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="	fas fa-hammer"></i>
                </div>
                <h3>design and construction</h3>
                {{-- <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p> --}}
                <a href="{{route('user.contract')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
          </div>
        </div>
      </section><br><br>
    @endsection