

<?php include("header.php"); ?>
<?php 
	$boto="";
	if( isset( $_POST["menviar"] ) ) $boto = $_POST["menviar"];
		$_SESSION["names"]="";
	if($boto=="Ingresar"){
		if( isset( $_POST["muser"] ) ) $usu = $_POST["muser"];
			if( isset( $_POST["mclave"] ) ) $password = $_POST["mclave"];
				echo"usuario	 ".$usu;
				if ($usu == "jhonan"){
					if($password == "12345") {
						$_SESSION["names"]="Jhonan Vargas";
						header ("Location: bienvenida.php");
	   }} else {
				header ("Location: ingresa.php");
	   }
	   }
	
?>
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
				<div class="desc animate-box">
					
					<h2>Ingresa</h2>
				</div>
				
			</div>

		</div>
		
		
		<!-- end:header-top -->
<form name=f method=post action="ingresa.php">
		<div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Ingrese</h3>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center  animate-box">
						<label>Ingrese el usuario </label><br>
							<input type="text" name="muser" id="muser">
						<br><label>Ingrese contraseña </label><br>
							<input type="password" name="mclave" id="mclave">
							<br><input type=submit name=menviar value='Ingresar' >
						
					</div>
				</div>
			</div>
		</div>
</form>			
			
		<!-- fh5co-blog-section -->
	<?php include("footer.php"); ?>				

