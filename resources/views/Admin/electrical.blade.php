@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">
      <div class="section-header">
        <h2>Electrical works</h2>
     <p>Bringing your vision to life through trusted design and construction excellence</p>   
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
            <img src="{{asset('storage/images/'.$images['8']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                 
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">electrical work 1</h4>
                  <p>Makiba design and construction is a full-service design and construction firm specializing in electrical works. </p>
                    @auth('admin')              
                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['8']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>
                                  @endauth
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
            <img src="{{asset('storage/images/'.$images['9']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
             
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">electrical work 2</h4>
                  <p>Whether you’re looking for a simple repair or a full-scale renovation, our team of experts can handle the job.</p>
                  @auth('admin')  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['9']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form> @endauth </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg" >
            <img src="{{asset('storage/images/'.$images['10']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
             
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">electrical work 3</h4>
                  
                  <p> Our team of professionals will work with you to create a tailored plan that fits to your needs.</p>
                  @auth('admin')  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['10']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form> @endauth</div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
            <img src="{{asset('storage/images/'.$images['11']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
              
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">electrical work 4</h4>
                  <p> we specialize in electrical works, lighting design and installation, making them the perfect choice for construction, renovation, or any other related project.</p> 
                  @auth('admin')   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['11']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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