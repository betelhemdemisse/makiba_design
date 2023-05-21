@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Residential Design</h2>
      ;<p>Building the Future with Makiba Design & Construction.</p>
      </div>
  <div class="row gy-4">


    <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
      <div class="card-item">
        <div class="row">
          <div class="col-sm-6">
            <div class="card-bg" >
            <img src="{{asset('storage/images/'.$images['14']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

            </div>
          </div>
          <div class="col-sm-6 d-flex align-items-center">
            <div class="card-body">
              <h4 class="card-title">residential work 1</h4>
              <p> Our experienced team of architects, designers, and construction professionals can help bring your vision to life. </p>
              @auth('admin')              
              <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                              @csrf
                            <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                            <input id="image_id" value="{{{$images['14']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                             name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                           <button type="submit" class="btn btn-primary"> change</button>
                            </form>@endauth
            </div>
          </div>
        </div>
      </div>
    </div>


           
          {{-- <!-- End Card Item --> --}}


          <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card-bg" >
                  <img src="{{asset('storage/images/'.$images['15']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
      
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">residential work 2</h4>
                    <p>We strive to create beautiful and functional spaces that are both aesthetically pleasing and practical.</p>
                    @auth('admin')              
                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['15']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth
                  </div>
                </div>
              </div>
            </div>
          </div>
      
      

          <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card-bg" >
                  <img src="{{asset('storage/images/'.$images['16']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
      
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">residential work 3</h4>
                    <p>At Makiba Design and Construction, we are dedicated to creating the best residential design and construction experience for our customers.</p>
                    @auth('admin')              
                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['16']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth
                  </div>
                </div>
              </div>
            </div>
          </div>
      

          <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card-bg" >
                  <img src="{{asset('storage/images/'.$images['17']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
      
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">residential work 4</h4>
                <p> Let Makiba design and construction help you make your design dreams a reality</p>
                    @auth('admin')              
                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['17']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth
                  </div>
                </div>
              </div>
            </div>
          </div>
      
      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection