@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Coffee Table</h2>
      <p>Design with purpose, construct with passion - Makiba Design and Construction</p>
      </div>
      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="{{asset('storage/images/'.$images['6']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                  
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">coffee_table work 1</h4>
                  <p>Makiba Design and Construction specializes in custom-built coffee tables, designed to suit any style of home.</p>

                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                       @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['6']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
               <img src="{{asset('storage/images/'.$images['7']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">coffee_table work 2</h4>
                  <p> Whether you're looking for a modern look, something rustic, or something sleek and contemporary, Makiba Design and Construction will work to create a stunning piece.</p> 

                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                       @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['7']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                 <button type="submit" class="btn btn-primary"> change</button>
                  </form> @endauth</div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg" >
                <img src="{{asset('storage/images/'.$images['8']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
                
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">coffee_table work 3</h4>
                  
                  <p>Makiba Design and Construction offers quality design and construction services, with a specialty in handcrafted coffee tables. </p> 

                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                      @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['8']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
                <img src="{{asset('storage/images/'.$images['9']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
              
              </div>
             
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">coffee_table work 4</h4>
                  <p>Our coffee tables are made from high-quality materials and feature unique, eye-catching designs that are sure to enhance the look of any room.</p> 
 
                  @auth('admin')
                  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                      @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['9']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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