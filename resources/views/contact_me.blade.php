 @extends('layouts.others')
@section('content')
 <div id="map-canvas"></div>
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <p><input type="text" placeholder="Name"></p>
                                <p><input type="text" placeholder="Email"></p>
                                <p><input type="text" placeholder="Subject"></p>
                            </div>
                            <div class="col-md-6">
                                <p><textarea name="" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                            </div>
                        </div>
                        <p class="text-center"><input type="submit" value="Send Message!"></p>
                    </div>
                    
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-left">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info-right">
                                    <p><i class="fa fa-map-marker"></i>House No: 00/aa<br/> Mirpur-1, Dhaka</p>
                                    <p><i class="fa fa-phone-square"></i> (00) 111 2222</p>
                                    <p><i class="fa fa-envelope"></i> info@dinlipi.com</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>
    </section>
		@endsection
		
		
		<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(18.013764, -76.801992)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);


          var marker = new google.maps.Marker({
            position: map.getCenter(),
            icon: 'img/map-marker.png',
            map: map
          });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>