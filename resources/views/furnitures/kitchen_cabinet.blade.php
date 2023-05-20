@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Constructions</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
           <img src="/storage/images/{{{$images['14']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                  @can('admin')
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                               @endcan
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 1</h4>
                  <p>Makiba Design and Construction is the premier choice for all your kichen cabinet needs. With years of experience and dedication to quality workmanship, they offer custom crafted designs that are both beautiful and durable.</p>
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
         <img src="/storage/images/{{{$images['15']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 2</h4>
                  <p>we provides high quality kitchen cabinet design and installation services. Our experienced team of professionals can create stylish cabinets for any home, with high quality materials and workmanship.</p>  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" >
         <img src="/storage/images/{{{$images['16']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 3</h4>
                  
                  <p>Our experienced team of professionals combine creative vision with top-tier materials to create beautiful and functional cabinets that perfectly fit into the existing space and elevate the design of any kitchen.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
         <img src="/storage/images/{{{$images['17']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 4</h4>
                  <p>Our attention to detail and passion for creating unique designs sets us apart from other cabinet makers. We combine traditional carpentry techniques with the latest technology to deliver a modern and stylish look for your kitchen. Whether you’re looking for a classic or contemporary style, our team will work with you to create the perfect cabinets for your home.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection