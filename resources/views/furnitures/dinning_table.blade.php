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
                 <img src="/storage/images/{{{$images['10']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                  @can('admin')
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                               @endcan
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">dining_table work 1</h4>
                  <p> At Makiba Design and Construction, we specialize in handcrafted dining tables and chairs. We take pride in our high-quality construction and design, providing beautiful and durable furniture for any dining area.</p>
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
               <img src="/storage/images/{{{$images['11']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">dining_table work 2</h4>
                  <p>Whether you're building a dream dining room or adding sophistication to an existing dining area, Makiba Design and Construction will ensure you get a spectacular and personalized product of the highest quality.</p>  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" >
               <img src="/storage/images/{{{$images['12']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">dining_table work 3</h4>
                  
                  <p>this is for example</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
               <img src="/storage/images/{{{$images['13']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">dining_table work 4</h4>
                  <p>Our experienced team of designers and builders are passionate about creating one-of-a-kind solutions that reflect your personal style and meet your needs. Let us bring your dream dining table to life</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection