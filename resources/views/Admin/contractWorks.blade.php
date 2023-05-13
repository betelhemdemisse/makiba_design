@extends('main_header.admin_final_header')
@section('content')
<section id="features" class="features section-bg">
  <div class="container aos-init" data-aos="fade-up">

    <ul class="nav nav-tabs row  g-2 d-flex" role="tablist">

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1" aria-selected="true" role="tab">
          <h4>metal work</h4>
        </a>
      </li>

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" aria-selected="false" tabindex="-1" role="tab">
          <h4>Gybsum work</h4>
        </a>
      </li><li class="nav-item col-3" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3" aria-selected="false" tabindex="-1" role="tab">
          <h4>Sanitary work</h4>
        </a>
      </li>

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4" aria-selected="false" tabindex="-1" role="tab">
          <h4>Electrical work</h4>
        </a>
      </li>

    </ul>

    <div class="tab-content">

      <div class="tab-pane active show" id="tab-1" role="tabpanel">
        <section id="constructions" class="constructions">
          <div class="container aos-init" data-aos="fade-up">
                    <div class="row gy-4">
  
             <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg">
                    <img src="/storage/images/{{{$images['0']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                          
                                  </div>
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                  <p>this is for example</p>
                                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['0']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>  
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div><div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg" >
                <img src="/storage/images/{{{$images['1']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
                                   </div>
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                  <p>this is for example</p>
                                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['1']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div>
                    </div> </div>
        </section>  
        </div>
          <div class="tab-pane" id="tab-2" role="tabpanel">
        <section id="constructions" class="constructions">
          <div class="container aos-init" data-aos="fade-up">
                    <div class="row gy-4">
  
             <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg">
            <img src="/storage/images/{{{$images['2']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
            
               
                                    </div>
                                    
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                  <p>this is for example</p>
                                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['2']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div><div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg">
                <img src="/storage/images/{{{$images['3']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">               
               
                                    </div>
                                    
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                  <p>this is for example</p>
                                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['3']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div>
                    </div> </div>
        </section> 
      </div><!-- End tab content item -->

      <div class="tab-pane" id="tab-3" role="tabpanel">
        <section id="constructions" class="constructions">
          <div class="container aos-init" data-aos="fade-up">
                    <div class="row gy-4">
  
             <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg" >
                <img src="/storage/images/{{{$images['4']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
                                    </div>
                                   
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                <p>this is for example</p>
                <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                  @csrf
                <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                <input id="image_id" value="{{{$images['4']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                 name="image_id" value="{{ old('image_id') }}"hidden autofocus>
               <button type="submit" class="btn btn-primary"> change</button>
                </form>
            
                                                 </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div><div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg">
                <img src="/storage/images/{{{$images['5']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                               </div>
                              
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                  <p>this is for example</p>
                                  <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                  <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                  <input id="image_id" value="{{{$images['5']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                   name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                 <button type="submit" class="btn btn-primary"> change</button>
                                  </form>  
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div>
                    </div> </div>
        </section> 
      </div>

      <div class="tab-pane" id="tab-4" role="tabpanel">
        <section id="constructions" class="constructions">
          <div class="container aos-init" data-aos="fade-up">
                    <div class="row gy-4">
  
             <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg">
                <img src="/storage/images/{{{$images['6']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                                    </div>
                                   
                                   </div>

          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <p>this is for example</p>
                                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                      @csrf
                                    <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                    <input id="image_id" value="{{{$images['6']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                     name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                   <button type="submit" class="btn btn-primary"> change</button>
                                    </form>
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                   

                                  </div><div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
              <div class="col-sm-8">
               <div class="card-bg" >
                <img src="/storage/images/{{{$images['7']['image']}}}" style="width:200%;height:100%;background-size:auto" class="img-fluid" alt="">
                
                                    </div>
                                   
                                   </div>
          <div class="col-sm-4 d-flex align-items-center">
       <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <p>this is for example</p>
                                    <form action="{{route('admin.change_contract_image')}}"method="POST"enctype="multipart/form-data">
                                      @csrf
                                    <input id="image1" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="avatar">
                                    <input id="image_id" value="{{{$images['7']['id']}}}" type="hidden" class="form-control @error('image_id') is-invalid @enderror"
                                     name="image_id" value="{{ old('image_id') }}"hidden autofocus>
                                   <button type="submit" class="btn btn-primary"> change</button>
                                    </form>
                                    </div>
                                   </div>
                                   </div>
                                   </div>
                                  </div>
                    </div> </div>
        </section></div><!-- End tab content item -->

    </div>

  </div>
</section><!-- End Features Section -->

@endsection