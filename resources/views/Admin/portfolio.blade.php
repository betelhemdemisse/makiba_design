@extends('main_header.final_header')
@section('content') 


<link href="assets/vendor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link href="/assets/css/style.css" rel="stylesheet">

    <section id="team" class="team">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Our services</h2>
        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
             <img src="{{asset('storage/images/'.$images['0']['image']) }}"style="width:100%;height:60%;background-size:auto" class="img-fluid" alt="">
             
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

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{asset('storage/images/'.$images['2']['image']) }}"style="width:200%;height:60%;background-size:auto" class="img-fluid" alt="">

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

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{asset('storage/images/'.$images['3']['image']) }}"style="width:100%;height:60%;background-size:auto" class="img-fluid" alt="">

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

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="{{asset('storage/images/'.$images['4']['image']) }}"style="width:100%;height:60%;background-size:auto" class="img-fluid" alt="">
              
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

        
          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="{{asset('storage/images/'.$images['6']['image']) }}"style="width:100%;height:60%;background-size:auto" class="img-fluid" alt="">

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
          </div>  <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="{{asset('storage/images/'.$images['7']['image']) }}"style="width:100%;height:60%;background-size:auto" class="img-fluid" alt="">

              <div class="social">
               <a href="{{route('admin.electrical')}}"><i class="bi bi-link-45deg"></i>see more</a>


              </div>
            </div>
            <div class="member-info text-center"style="height:60%">
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
                   <p>Makiba Design & Construction: Our Most Recent Projects</p>           
                     </div>
        
              <div class="row gy-4">
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card-bg">
              <img src="{{asset('storage/images/'.$images['8']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                        
                        </div>
                      </div>
                      <div class="col-sm-6 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">gybsum work 2</h4>
                          <p> We offer a wide range of services, from design to construction management, to ensure that your next project is completed to the highest of standards. </p>
        
                           @auth('admin') <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                            @csrf
                                          <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                          <input id="image_id" value="{{{$images['8']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                           name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                         <button type="submit" class="btn btn-primary"> change</button>
                                          </form>@endauth  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                {{-- end --}}
        
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card-bg" >
                        <img src="{{asset('storage/images/'.$images['9']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
        
                        </div>
                      </div>
                      <div class="col-sm-6 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">commercial_design work </h4>
                          
                          <p>Our experienced team of professionals provide comprehensive solutions tailored to meet your specific requirements.</p>
                          @auth('admin')              
                          <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                          @csrf
                                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                        <input id="image_id" value="{{{$images['9']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
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
                 <img src="{{asset('storage/images/'.$images['10']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                       
                        </div>
                      </div>
                      <div class="col-sm-6 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title">kitchen_cabinet work </h4>
                          <p>we provides high quality kitchen cabinet design and installation services. Our experienced team of professionals can create stylish cabinets for any home, with high quality materials and workmanship.</p>
        
         @auth('admin')
                           <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">  
                                            @csrf
                                          <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                          <input id="image_id" value="{{{$images['10']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                           name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                         <button type="submit" class="btn btn-primary"> change</button>
                                          </form>@endauth  </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Card Item -->
        <!-- End Card Item -->
        
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
                  <h4 class="card-title">sanitary work </h4>
                  <p>Our experienced technicians are equipped with the necessary tools and knowledge to ensure your plumbing systems remain in good working order.</p> 

                  @auth('admin')              
                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
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
            </div>
          </section> 
          
          



          <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box text-center">
                    <h3 class="title-a">
                      services
                    </h3>
                    <p class="subtitle-a">
                      Makiba Design & Construction: Professional Services for Your Home and Business.
                    </p>
                    <div class="line-mf"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="work-box">

                    <a href="{{asset('storage/images/'.$images['12']['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="{{asset('storage/images/'.$images['12']['image']) }}" alt="" class="img-fluid">
 @auth('admin')<form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                          @csrf
                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                        <input id="image_id" value="{{{$images['12']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                       <button type="submit" class="btn btn-primary"> change</button>
                        </form>@endauth                       
                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Lorem impsum dolor</h2>
                          <div class="w-more">
                            <span class="w-ctegory">contract works</span> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{asset('storage/images/'.$images['13']['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="{{asset('storage/images/'.$images['13']['image']) }}" alt="" class="img-fluid">
 @auth('admin')<form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                          @csrf
                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                        <input id="image_id" value="{{{$images['13']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                       <button type="submit" class="btn btn-primary"> change</button>
                        </form>@endauth                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Bed</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Furniture</span> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{asset('storage/images/'.$images['14']['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="{{asset('storage/images/'.$images['14']['image']) }}" alt="" class="img-fluid">
 @auth('admin')<form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                          @csrf
                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                        <input id="image_id" value="{{{$images['14']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                       <button type="submit" class="btn btn-primary"> change</button>
                        </form>@endauth                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">sofa</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Furniture</span> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{asset('storage/images/'.$images['14']['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="{{asset('storage/images/'.$images['14']['image']) }}" alt="" class="img-fluid">
 @auth('admin')<form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                          @csrf
                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                        <input id="image_id" value="{{{$images['14']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                       <button type="submit" class="btn btn-primary"> change</button>
                        </form>@endauth                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">wardrop</h2>
                          <div class="w-more">
                            <span class="w-ctegory">Furniture</span> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{asset('storage/images/'.$images['15']['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="{{asset('storage/images/'.$images['15']['image']) }}" alt="" class="img-fluid">
 @auth('admin')<form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                          @csrf
                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                        <input id="image_id" value="{{{$images['5']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                       <button type="submit" class="btn btn-primary"> change</button>
                        </form>@endauth                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">sanitary works</h2>
                          <div class="w-more">
                            <span class="w-ctegory">contract works</span> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{asset('storage/images/'.$images['16']['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="{{asset('storage/images/'.$images['16']['image']) }}" alt="" class="img-fluid">
 @auth('admin')<form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                          @csrf
                        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                        <input id="image_id" value="{{{$images['16']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                       <button type="submit" class="btn btn-primary"> change</button>
                        </form>@endauth                      </div>
                    </a>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">Residential Design</h2>
                          <div class="w-more">
                            <span class="w-category">Design and construction</span> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
            </div>
          </section>
@endsection