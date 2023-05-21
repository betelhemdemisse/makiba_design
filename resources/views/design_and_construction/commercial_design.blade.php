@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Commercial Design</h2>
        <p>Makiba Design & Construction: Professional Services for Your Home and Business.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                  <img src="/storage/images/{{{$images['10']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                  @can('admin')
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                               @endcan
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">commercial_design work 1</h4>
                  <p>Our experienced team of designers and builders specialize in both commercial design and residential construction projects, ensuring each task meets the highest standards of quality.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                <img src="/storage/images/{{{$images['11']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">commercial_design work 2</h4>
                  <p>From complex renovations to one-off builds, we strive to provide superior workmanship quality with a commitment to client satisfaction.</p> 
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->
      </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg" >
                <img src="/storage/images/{{{$images['12']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">commercial_design work 3</h4>
                  
                  <p>Our experienced team of professionals provide comprehensive solutions tailored to meet your specific requirements.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                <img src="/storage/images/{{{$images['13']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
 
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">commercial_design work 4</h4>
      <p> Our experienced design team can help you create a unique look and feel for your brand that will bring your vision to life.</p> 
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->
      </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection