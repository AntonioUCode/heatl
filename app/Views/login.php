<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document Title</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="../public/assets/css/login.css">
	<link href="../public/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="../public/assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img class="imgr animate__animated  animate__rotateIn" src="../public/assets/image/logo.svg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user-md"></i></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="Usario o Curp ">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">¿recordar contraseña?</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="button" name="button" class="btn login_btn">Iniciar Sesion</button>
						</div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿deseas una cuenta?<a href="<?php echo base_url();?>/SeleccionarUs" class="ml-2">ingresa aqui</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>