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
                                <p><input type="text" id="name" placeholder="Name"></p>
                                <p><input type="text" id="email" placeholder="Email"></p>
                                <p><input type="text" id="subject" placeholder="Subject"></p>
                            </div>
                            <div class="col-md-6">
                                <p><textarea name="" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                            </div>
                        </div>
                        <p class="text-center"><input type="submit" id="send_msg" value="Send Message!"></p>
                    </div>
                    
                </div>                
            </div>
        </div>
    </section>
		@endsection
		
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'> </script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(<?php echo config('custom.location_lat');?>, <?php echo config('custom.location_lng');?>) 
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
	
	<script>
	   $('document').ready(function(){
	    $.ajaxSetup({
		 headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		 }
	   });
	   
	   
	       $('#send_msg').on('click',function(){
		   
		      var name = $('#name').val();
			  var email = $('#email').val();
			  var subject = $('#subject').val();
			  var msg = $('#message').val();
			  var url = "<?php echo url();?>/insert_send_msg";
			  $('.ajax_loader').show();
			  $.post(url, {name:name, email:email, subject:subject, msg:msg}, function(response){
			  
			       alert("Thanks For Sending Message")
				   $('.ajax_loader').hide();
				   $('#name').val('');
				   $('#email').val('');
				   $('#subject').val('');
				   $('#message').val('');
			  });
			  
		   });
		   
		   
	   });
	 
	</script>