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
                  <img src="/storage/images/{{{$images['20']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                  @can('admin')
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                               @endcan
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sanitary work 1</h4>
                  <p>At Makiba design and construction, we provide a full range of design and construction services, including sanitary works. We have a team of experienced professionals who are dedicated to providing a high quality of work and customer service. Our projects range from small scale renovations and repairs to larger scale new constructions.</p>
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
                <img src="/storage/images/{{{$images['21']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sanitary work 2</h4>
                  <p>We provide comprehensive sanitary work services, from design and installation to maintenance and repairs. Our experienced team of professionals is dedicated to providing the highest quality services to ensure your satisfaction. We use only the best materials and tools to ensure your sanitary system works efficiently and reliably.</p></div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" >
                <img src="/storage/images/{{{$images['22']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sanitary work 3</h4>
                  
                  <p>We offer a comprehensive sanitary work service that includes everything from design and installation of new fixtures, to repairs and maintenance of existing systems. Our experienced technicians are equipped with the necessary tools and knowledge to ensure your plumbing systems remain in good working order.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
                <img src="/storage/images/{{{$images['23']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
 
              </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sanitary work 4</h4>
                  <p>Makiba Design and Construction offers a wide range of services to meet all of your design and construction needs - from changes to existing structures, to complete new builds. We specialize in sanitary work and are well-equipped to provide professional installation of sinks, toilets, tubs, and more.</p> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection