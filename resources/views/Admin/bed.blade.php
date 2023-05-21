@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Bed</h2>
     <p>Let Makiba Design and Construction Transform Your Home Into a Work of Art</p>
      </div>
      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                  <img src="{{asset('storage/images/'.$images['2']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 4</h4>
                  <p>Our design and construction services offer the perfect bed for any bedroom. Our team of experienced designers will work with you to create a custom bed that fits your style, needs, and budget.</p>
                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                         @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['2']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                 <button type="submit" class="btn btn-primary"> change</button>
                  </form>@endauth</div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->




        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="{{asset('storage/images/'.$images['3']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
              
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 4</h4>
                  <p> Our expert craftsmen create beds that are tailored to your exact specifications, from traditional designs to modern, contemporary looks.</p> 
                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                         @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['3']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                 <button type="submit" class="btn btn-primary"> change</button>
                  </form>@endauth</div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->



        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="{{asset('storage/images/'.$images['4']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
              
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 4</h4>
                  <p>Our beds are made with quality materials, designed for maximum comfort and durability, and are crafted to be aesthetically pleasing.</p>
                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                         @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['4']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                 <button type="submit" class="btn btn-primary"> change</button>
                  </form>@endauth</div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->


        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="{{asset('storage/images/'.$images['5']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
              
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">bed work 4</h4>
                  <p> With our custom beds, you can rest assured that you will have a perfect place to rest each and every night.</p>
                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                         @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['5']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                 <button type="submit" class="btn btn-primary"> change</button>
                  </form>@endauth</div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection