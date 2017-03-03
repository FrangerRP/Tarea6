<?php
	$mensaje ="";	 	
	$CI =& get_instance();
	if($_POST){
		$datos = $_POST;
		$datos['ip'] = $_SERVER['REMOTE_ADDR'];
		$CI->db->insert('personas',$datos);
		$mensaje = "Registro recibido";
	}
?>
<html>
	<head>
		<title>Registrate</title>	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
	*{font-family: 'Roboto', sans-serif;}
	body{
		background: url(https://www.clipartsgram.com/image/442567454-awesome-black-wallpaper-pattern.jpg);
		background-color: #303030;
	}
	.container{
		background-color: #212652;
		margin-top: 100px;	
		box-shadow: 5px 5px rgba(255,255,255,0.1);	
	}
	#TopText{
		display: block;
		background-color: #353968;
		color: #ffffff;
		text-align: center;
		font-size: 300%;
	}
	#AlComp{
		position: absolute;
		color: #4DC75E;		
		bottom: 0px;
		left: 0px;
		padding: 10px;
	}
	#pos{				
		margin-top: 50px;		
	}
</style>
	</head>
	<body>

	<h3 id="AlComp"><?php echo $mensaje; ?></h3>
	<h3 id="TopText">Firma con nosotros</h3>
	<div class="container">					
			<form method="post">
			<div class="row">
				<div class="col col-sm-6" id="pos">
					<div class="form-group input-group">
						<span class="input-group-addon">Cedula</span>
						<input type="text" name="Cedula" required class="form-control">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Nombre</span>
						<input type="text" name="Nombre" class="form-control">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Email</span>
						<input type="email" name="Email" required class="form-control">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Telefono</span>
						<input type="tel" name="Telefono" class="form-control">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Comentario</span>
						<textarea name="Comentario" class="form-control"></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success">Guardar</button>
						<a href="<?php echo base_url('App');?>" class="btn btn-danger">Regresar</a>
					</div>
				</div>
			</div>
			<input type="hidden" name="lat" id="lat">
			<input type="hidden" name="lon" id="lon">
			</form>
		</div>
		<script>
			window.onload = function(){
				navigator.geolocation.getCurrentPosition(function(datos){
					document.getElementById('lat').value=datos.coords.latitude;
					document.getElementById('lon').value=datos.coords.longitude;
				})
			}

			
		</script>
	</body>
</html>