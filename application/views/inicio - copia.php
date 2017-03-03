<html>
	<head>
		<title>Ejemplo</title>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Roboto');
			*{
				margin: 0px;
				padding: 0px;
				font-family: 'Roboto', sans-serif;
			}
			body{
				background-color: #B57D65;
			}
			.btn{				
				text-align: center;
				text-decoration: none;
				padding: 10px;				
				background-color: #F1F1F1;
				color: #000000				
			}
			.btn:hover{
				background-color: #BDBDBD;
				color: #FFFCFC;
			}
			.btn-primary{
				background-color: #616ADB;
				color: #fff;
			}
			.btn-primary:hover{
				background-color: #4D54A8;
				color: #fff;
			}
			.Parametro{
				font-size: 30px;
				position: absolute;
				bottom: 10px;
				left: 50%;
				margin-left: -90px;
			}
			.container h1{
				display: block;
				background-color: #353968;
				color: #ffffff;
				text-align: center;
				font-size: 300%;
			}
			.map{
				width: 700px;
				height: 500px; 
				background: #cccccc;
				margin: 50 auto;
				border: solid 2px #615566;
			}

		</style>
	</head>
	<body>
	<img src="bg.jpg" alt="aa">
		<div class="container">
			<div>
				<h1>Revelen los nombres de los implicados</h1>
			</div>
			<div id="map" class="map">
				mapa
			</div>
			<a href="<?php echo base_url('App/registro'); ?>" class="btn btn-primary Parametro">Registrarse</a>
		</div>

		<script>
			function initMap() {
 			 var myLatLng = {lat: 18.5261268, lng: -69.8835651};

  			 var map = new google.maps.Map(document.getElementById('map'), {
   				zoom: 10,
    			center: myLatLng
  			});
  		<?php
			$CI =& get_instance();

  			$rs = $CI->db->query("SELECT * FROM personas ORDER BY id DESC LIMIT 10");

  			$datos = $rs->result();
		
			foreach ($datos as $persona) {
  				echo "
  					myLatLng = {lat: {$persona->lat}, lng: {$persona->lon}};
  					var marker = new google.maps.Marker({
    				position: myLatLng,
    				map: map,
    				title: 'User'
  					});
  				";
  			}

  	?> 
	}
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPNErTLcXFYPebkl8ANk-tQc4fqlgWXOg&callback=initMap"></script>
	</body>
</html>