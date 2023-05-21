@extends('main_header.final_header')
@section('content') 
<section id="constructions" class="constructions">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-header">
        <h2>Office Table</h2>
     <p>Building a better future with Makiba Design and Construction.</p>
      </div>

      <div class="row gy-4">
  <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                 <img src="/storage/images/{{{$images['18']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 1</h4>
                  <p>Makiba Design and Construction specializes in custom design and construction services for both residential and commercial projects.</p>
                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['18']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
               <img src="/storage/images/{{{$images['19']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 2</h4>
                  <p>From office tables to full-service remodeling, Makiba offers a wide range of high-quality materials and craftsmanship.</p>  </div>
                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['19']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->
        
        {{-- <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="/storage/images/{{{$images['19']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 2</h4>
                  <p>From office tables to full-service remodeling, Makiba offers a wide range of high-quality materials and craftsmanship.</p>  </div>
                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['19']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item --> --}}
        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                 <img src="/storage/images/{{{$images['18']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 1</h4>
                  <p>Makiba Design and Construction specializes in custom design and construction services for both residential and commercial projects.</p>
                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['18']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
               <img src="/storage/images/{{{$images['19']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 2</h4>
                  <p>From office tables to full-service remodeling, Makiba offers a wide range of high-quality materials and craftsmanship.</p>  </div>
                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['19']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->
  
{{-- 
        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg" >
               <img src="/storage/images/{{{$images['20']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 3</h4>
                  
                  <p>We specialize in creating pieces that combine both functionality and aesthetic appeal for our clients' perfect space.</p>

                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['20']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item --> --}}

{{--         
        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="/storage/images/{{{$images['19']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 2</h4>
                  <p>From office tables to full-service remodeling, Makiba offers a wide range of high-quality materials and craftsmanship.</p>  </div>
                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['19']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth  </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item --> --}}

        {{-- <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
               <img src="/storage/images/{{{$images['21']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">office_table work 4</h4>
                  <p> Our team of professional architects and interior designers will help you create the perfect office table that perfectly suits your space.</p>

                                    @auth('admin')
                   <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">                 
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['21']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>@endauth </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item --> --}}

      </div>

    </div>
  </section><!-- End Constructions Section -->

@endsection