@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Furnitures</h2>
        <p>Makiba Design and Construction: High-Quality Services for Any Project</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
                 <img src="/storage/images/{{{$images['2']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                  @can('admin')
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                               @endcan
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 1</h4>
                  <p>Our design and construction services offer the perfect bed for any bedroom. Our team of experienced designers will work with you to create a custom bed that fits your style, needs, and budget. We provide high-quality craftsmanship to ensure your bed is built to last.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
               <img src="/storage/images/{{{$images['3']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 2</h4>
                  <p> Our expert craftsmen create beds that are tailored to your exact specifications, from traditional designs to modern, contemporary looks. We take pride in providing quality construction, ensuring that your bed will last for years to come.</p>  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" >
               <img src="/storage/images/{{{$images['4']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 3</h4>
                  
                  <p>We offer custom designed and constructed beds that are tailored to your individual needs. Our beds are made with quality materials, designed for maximum comfort and durability, and are crafted to be aesthetically pleasing.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
               <img src="/storage/images/{{{$images['5']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 4</h4>
                  <p> With our custom beds, you can rest assured that you will have a perfect place to rest each and every night.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection