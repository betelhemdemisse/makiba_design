@extends('main_header.final_header')
@section('content') 

    <section id="team" class="team">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Our services</h2>
        </div>

        <div class="row gy-5">

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
             <img src="/storage/images/{{{$images['0']['image']}}}" class="img-fluid" alt="">
             
              <div class="social">
               <a href="{{route('admin.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Bed</h4>
              <span>furniture</span> 
              @auth('admin')
              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['0']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
              </form>@endauth
                 </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="/storage/images/{{{$images['1']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('admin.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sofa</h4>
              <span>furniture</span>
              @auth('admin')

              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['1']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
              </form>  @endauth
                </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="/storage/images/{{{$images['2']['image']}}}" class="img-fluid" alt="">

              <div class="social">
                <a href="{{route('admin.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
               
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Tv Stand</h4>
              <span>furniture</span>
              @auth('admin')

              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['2']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
            </form>  @endauth
               </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="/storage/images/{{{$images['3']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('admin.Sofa')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Dinning Table</h4>
              <span>furniture</span>
              @auth('admin')
              
              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['3']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
            </form>   @endauth
              </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="/storage/images/{{{$images['4']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('admin.metal')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Metal Works</h4>
              <span>contract works</span>
              @auth('admin')
               
              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['4']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
            </form>   @endauth
              </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/storage/images/{{{$images['5']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('admin.sanitary')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>sanitary works</h4>
              <span>contract works</span>
              @auth('admin')
               
              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['5']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
            </form>  @endauth
             </div>
          </div><!-- End Team Member -->
          <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/storage/images/{{{$images['6']['image']}}}" class="img-fluid" alt="">
              <div class="social">
               <a href="{{route('admin.gybsum')}}"><i class="bi bi-link-45deg"></i>see more</a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>gybsum works</h4>
              <span>contract works</span>
              @auth('admin')

              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['6']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
            </form>   @endauth
             </div>
          </div>  <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/storage/images/{{{$images['7']['image']}}}" class="img-fluid" alt="">

              <div class="social">
               <a href="{{route('admin.electrical')}}"><i class="bi bi-link-45deg"></i>see more</a>


              </div>
            </div>
            <div class="member-info text-center">
              <h4>electrical works</h4>
              <span>contract works</span>
              @auth('admin')

              <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                @csrf
              <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
              <input id="image_id" value="{{{$images['7']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
               name="image_id" value="{{ old('image_id') }}"hidden autofocus>
             <button type="submit" class="btn btn-primary"> change</button>
            </form>   @endauth
             </div>
          </div>
        </div>

      </div>
    </section>
    <section>
        <section class="class-portfolio">
          <section id="constructions" class="constructions">
            <div class="container aos-init" data-aos="fade-up">
        
              <div class="section-header">
                <h2>some of our woks</h2>
                   <p>write something here</p>           
                     </div>
        
              <div class="row gy-4">
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg">
                          <img src="/storage/images/{{{$images['8']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                         
                        </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Gybsum work </h4>
                           <p>this is for example</p>
              @auth('admin')
                           
                                          <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                                            @csrf
                                          <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                          <input id="image_id" value="{{{$images['8']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                           name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                         <button type="submit" class="btn btn-primary"> change</button>
                                          </form> @endauth
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg">
                          <img src="/storage/images/{{{$images['9']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                     
                        </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Commercial work </h4>
                           <p>this is for example</p>
              @auth('admin')
                           
                                          <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                                            @csrf
                                          <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                          <input id="image_id" value="{{{$images['9']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                           name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                         <button type="submit" class="btn btn-primary"> change</button>
                                          </form> @endauth  </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg" >
                          <img src="/storage/images/{{{$images['10']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                     
                        </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Kitchen Cabinet work </h4>
                          
                           <p>this is for example</p>
              @auth('admin')

                                          <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                                            @csrf
                                          <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                          <input id="image_id" value="{{{$images['10']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                           name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                         <button type="submit" class="btn btn-primary"> change</button>
                                          </form> @endauth </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card-bg">
                          <img src="/storage/images/{{{$images['11']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                      
                      </div>
                      </div>
                      <div class="col-sm-4 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">Sanitary work</h4>
                           <p>this is for example</p>
              @auth('admin')

                                          <form action="{{route('admin.change_portfolio_image')}}"method="POST"enctype="multipart/form-data">
                                            @csrf
                                          <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                          <input id="image_id" value="{{{$images['11']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                           name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                         <button type="submit" class="btn btn-primary"> change</button>
                                          </form> @endauth </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        
              </div>
        
            </div>
          </section>   
@endsection