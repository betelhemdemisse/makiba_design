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
              <div class="col-sm-6">
                <div class="card-bg">
                  <img src="{{asset('storage/images/'.$images['34']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

                </div>
               
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">tv_stand work 1</h4>
                   <p>Makiba Design and Construction offers a variety of custom design and construction services that are tailored to meet your individual needs.</p>
                   @auth('admin')<form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                    @csrf
                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                  <input id="image_id" value="{{{$images['34']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
                <img src="{{asset('storage/images/'.$images['35']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">tv_stand work 2</h4>
                   <p> Our team of experienced professionals are dedicated to delivering on-time and on-budget projects that will exceed your expectations.</p>
                                  @auth('admin')<form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['35']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
                <img src="{{asset('storage/images/'.$images['36']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
               
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">tv_stand work 3</h4>
                  
                   <p> we specialize in creating custom and unique furniture  We take pride in creating something one of a kind for your home and offer a wide variety of options for any budget.</p>

                                  @auth('admin')<form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['36']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  @endauth</form> </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-bg">
                <img src="{{asset('storage/images/'.$images['37']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
              </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">tv_stand work 4</h4>
                   <p> We craft this piece with the utmost care and attention to detail, ensuring that it is both beautiful and functional.</p>

                                  @auth('admin')<form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['37']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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