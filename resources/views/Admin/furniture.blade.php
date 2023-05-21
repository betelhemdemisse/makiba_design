@extends('main_header.final_header')
@section('content') 
<section id="alt-services-2" class="alt-services section-bg">
  <div class="container aos-init aos-animate" data-aos="fade-up">
<h2>Furnitures</h2>
    <div class="row justify-content-around gy-4">
      <div class="col-lg-5 d-flex flex-column justify-content-center">
       
        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <i class="fa fa-couch"></i>
          <div>
            <h4><a href="" class="stretched-link">Sofa</a></h4>
            {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> --}}
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <i class="fa fa-bed"></i>
          <div>
            <h4><a href="" class="stretched-link">Bed</a></h4>
            {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> --}}
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <i class="fa fa-table"></i>
          <div>
            <h4><a href="" class="stretched-link">dinning Table</a></h4>
            {{-- <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p> --}}
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <i class="fa fa-table"></i>
          <div>
            <h4><a href="" class="stretched-link">Wardrop</a></h4>
            {{-- <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p> --}}
          </div>
          
        </div><!-- End Icon Box -->
        @auth('admin')  <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">
          @csrf
        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
        <input id="image_id" value="{{{$images['0']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
       <button type="submit" class="btn btn-primary"> change</button>
        </form>@endauth
      </div>

      <div class="col-lg-6 img-bg aos-init aos-animate"data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('storage/images/'.$images['0']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">

      </div>
     
    </div>

  </div>
</section>
<section id="alt-services" class="alt-services">
  <div class="container aos-init aos-animate" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-6 img-bg aos-init aos-animate"data-aos="zoom-in" data-aos-delay="100">
        <img src="{{asset('storage/images/'.$images['1']['image']) }}"style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
        
      </div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
       
        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <i class="fa fa-table"></i>
          <div>
            <h4><a href="" class="stretched-link">Coffee Table</a></h4>
            {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> --}}
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <i class="fa fa-table"></i>
          <div>
            <h4><a href="" class="stretched-link">Shelf</a></h4>
            {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> --}}
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Tv Stand</a></h4>
            {{-- <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p> --}}
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <i class="fa fa-table"></i>
          <div>
            <h4><a href="" class="stretched-link">Kitchen Cabinet</a></h4>
            {{-- <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p> --}}
          </div>
        </div><!-- End Icon Box -->
@auth('admin')        <form action="{{route('admin.change_furnitures_image')}}"method="POST"enctype="multipart/form-data">

          @csrf
        <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
        <input id="image_id" value="{{{$images['1']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
         name="image_id" value="{{ old('image_id') }}"hidden autofocus>
       <button type="submit" class="btn btn-primary"> change</button>
        </form>@endauth
      </div>
    </div>

  </div>
</section>
@endsection