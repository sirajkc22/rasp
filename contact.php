
<?php include "header.php"; ?>	

	<!-- Start All Pages -->
		
		<img src="images/002.jpg" width="100%">
	<!-- End All Pages -->
	
	<!-- Start Contact -->

	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Contact Information are Listed here</p>
                                                  
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<h1 style="font-family: cambria; color: red; text-align: center;">RASP Delivery</h1>
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<center><span style="color: tomato; font-size: 1.3em; text-align: center; "><b>Email Us :</b> RASP_Delivery@gmail.com</span></center>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<center><span style="color: tomato; font-size: 1.3em; text-align: center; "><b>Mobile  :</b> +977 986 21 70967</span></center>
									<div class="help-block with-errors"></div>
								</div> 
							</div>




							<div class="col-md-12">
								<div class="form-group"> 
									<center><span style="color: tomato; font-size: 1.3em; text-align: center; "><b>Location  :</b> jawalakhel, lalitpur.</span></center>
									<div class="help-block with-errors"></div>
								</div>
								
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
<p align="center">OUR LOCATION</p>
	<link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
<script onload="mapContent();" src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js" defer></script>

<style>
#map {
	height: 500px;
	width: 100%;
}

@media only screen and (max-width: 767px) {
	#map {
		height: 300px;
	}
}

#marker {
  background-image: url('/wp-content/uploads/2021/04/copywriter-logo-dark.svg');
  background-size: cover;
  width: 30px;
  height: 30px;
}

</style>

<div id='map'></div>
<script>
	function mapContent(){
		var api_key = 'PTOhdAF7Nl2gPZhDBn7MWg1ZEJIa90cM';
		var latAndLong = {lat: 27.66128, lng: 85.31899}; 
		var zoomLevel = 10;
		var yourAddress = 'RASP';

		var map = tt.map({
		    container: 'map',
		    key: api_key,
		    center: latAndLong,
		    zoom: zoomLevel
		});

		var marker = new tt.Marker().setLngLat(latAndLong).addTo(map);
	 	
	 	// FOR CUSTOM MARKER
		//var customMarker = document.createElement('div');
		//customMarker.id = 'marker';
		//var marker = new tt.Marker({element: customMarker}).setLngLat(latAndLong).addTo(map);

		var popupOffsets = {
		  top: [0, 0],
		  bottom: [0, -70],
		  'bottom-right': [0, -70],
		  'bottom-left': [0, -70],
		  left: [25, -35],
		  right: [-25, -35]
		}

		var popup = new tt.Popup({offset: popupOffsets}).setHTML(yourAddress);
	    marker.setPopup(popup).togglePopup();

    }

</script>
<h1 align="center">Thank you for Visiting Our Site!!.....</h1>
					</div>

	<!-- End Contact -->
<?php include "footer.php"; ?>
