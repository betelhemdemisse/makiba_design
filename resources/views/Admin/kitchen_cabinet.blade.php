@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Kitchen Cabinet</h2>
        <p>Making Your Vision a Reality - Makiba Design and Construction</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
           <img src="{{asset('storage/images/'.$images['14']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                 
                </div>
              </div>
              <div class="col-sm-4 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 1</h4>
                  <p>Makiba Design and Construction is the premier choice for all your kichen cabinet needs. </p>
           @auth('admin')
                   <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">  
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
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
           <img src="{{asset('storage/images/'.$images['15']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 2</h4>
                  <p>we provides high quality kitchen cabinet design and installation services. Our experienced team of professionals can create stylish cabinets for any home, with high quality materials and workmanship.</p>

 @auth('admin')
                   <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">  
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['15']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

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
                  <h4 class="card-title">kitchen_cabinet work 3</h4>
                  
                  <p>Our experienced team of professionals combine creative vision with top-tier materials to create beautiful and functional cabinets that perfectly fit into the existing space and elevate the design of any kitchen.</p>

 @auth('admin')
                   <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">  
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['16']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
         <img src="/storage/images/{{{$images['17']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">kitchen_cabinet work 4</h4>
                  <p> We combine traditional carpentry techniques with the latest technology to deliver a modern and stylish look for your kitchen.our team will work with you to create the perfect cabinets for your home.</p> 

 @auth('admin')
                   <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">  
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['17']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection