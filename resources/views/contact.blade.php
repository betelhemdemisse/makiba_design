@extends('main_header.final_header')   
@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<style type="text/css">
  #map {
    height: 400px;
  }
</style>
<main id="main">
    <section id="contact" class="contact"style="background-image: url(/assets/img/hero-carousel/hero-carousel-5.jpg)">
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center"style="background-color:rgb(231, 231, 144)">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Addis Ababa, Ethiopia</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center"style="background-color:rgb(231, 231, 144)">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>natanemzemariam@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

         

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <div class="container mt-5">
              <div id="map"></div>
          </div>
          
          <script type="text/javascript">
              function initMap() {
                const myLatLng = { lat:  9.005401, lng: 38.763611};
                const map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 5,
                  center: myLatLng,
                });
        
                new google.maps.Marker({
                  position: myLatLng,
                  map,
                  title: "makiba design and construction",
                });
              }
        
              window.initMap = initMap;
          </script>
        
          <script type="text/javascript"
              src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
        
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""></iframe> --}}
          </div><!-- End Google Maps -->
          <div class="col-lg-6 ">

         
            <div class="info-item  d-flex flex-column justify-content-center align-items-center"style="background-color:rgb(231, 231, 144)">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+2519-53-94-28-85 <br>  

                +2519-13-40-69-25</p>
            </div>
        </div>

      </div>
    </section>
  </main>
@endsection