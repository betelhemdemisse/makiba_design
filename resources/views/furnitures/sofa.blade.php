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
                  <img src="/storage/images/{{{$images['30']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sofa work 1</h4>
                  <p>this is for example</p>
                  @auth('admin')
                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                   @csrf
                                 <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                 <input id="image_id" value="{{{$images['30']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                  name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                <button type="submit" class="btn btn-primary"> change</button>
                                 </form>@endauth
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
                <img src="/storage/images/{{{$images['31']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sofa work 2</h4>
                   <p>this is for example</p>  </div>@auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['31']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" >
                <img src="/storage/images/{{{$images['32']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sofa work 3</h4>
                  <p>this is for example</p>  </div>@auth('admin')
                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                   @csrf
                                 <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                 <input id="image_id" value="{{{$images['32']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                  name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                <button type="submit" class="btn btn-primary"> change</button>
                                 </form>@endauth
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg">
                <img src="/storage/images/{{{$images['33']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">sofa work 4</h4>
                  <p>this is for example</p>  </div>@auth('admin')
                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                   @csrf
                                 <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                 <input id="image_id" value="{{{$images['33']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                  name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                <button type="submit" class="btn btn-primary"> change</button>
                                 </form>@endauth
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection