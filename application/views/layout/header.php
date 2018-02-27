<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Agencia digital a sus servicios">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>

<!-- Link para los estilos CCS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

	<link href="https://file.myfontastic.com/2SQuVNdrs635VjAgGpanbP/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>icon/logo1_2_.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url(); ?>icon/logo1_2_.ico" type="image/x-icon">
		<!-- Plugins -->
		<link href="<?php echo base_url(); ?>assets/css/animations.css" rel="stylesheet">
<!-- Custom css --> 
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">


	<title>EMY EDECANES Y MODELOS, S.A. DE C.V.</title>
</head>
<body>
<div class="main">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
				<li class="sidebar-brand">
				<a href="#"><center><img src="assets/images/logo1 (2).png"  alt=""></center></a>				
				</li>
                <li>
				<a href="#">Inicio</a>
				
				</li>
                <li>
				<a  data-toggle="collapse" href="#colla-1" role="button" aria-expanded="false" aria-controls="collapseExample">Quienes Somos</a>
				<ul class="collapse list-unstyled" id="colla-1">
                	<li><a href="#">Misión</a></li>
                    <li><a href="#">Visión</a></li>
                </ul>
                </li>
                <li>
				<a  data-toggle="collapse" href="#colla-2" role="button" aria-expanded="false" aria-controls="collapseExample">Edecanes</a>
				<ul class="collapse list-unstyled" id="colla-2">
					<li><a href="#">A</a></li>
            		<li><a href="#">AA</a></li>
					<li><a href="#">AAA</a></li>
				</ul>
				</li>
                <li>
				<a  data-toggle="collapse" href="#colla-3" role="button" aria-expanded="false" aria-controls="collapseExample">Animadores</a>
				<ul class="collapse list-unstyled" id="colla-3">
					<li><a href="#">Mujer</a></li>
            		<li><a href="#">Hombre</a></li>
				</ul>
                </li>
                <li>
				<a  data-toggle="collapse" href="#colla-4" role="button" aria-expanded="false" aria-controls="collapseExample">Modelos</a>
				<ul class="collapse list-unstyled" id="colla-4">
					<li><a href="#">Fotografia fija</a></li>
            		<li><a href="#">Pasarela</a></li>
				</ul>
                </li>
                <li>
                    <a href="#">Únete a nosostros</a>
                </li>
                <li>
                    <a href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>

	<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrolltop"><i class="icon-up-open-big"></i></div>

        <div class="home-menu col-lg-12" >
	

			<div class="row">
					<div class="col-lg-2 boton-menu">
                    <!-- /#sidebar-wrapper -->
                    <div class="boton-menu-item">
					<a href="#menu-toggle"  id="menu-toggle"><i class="icon-align-justify"> </i></a>
					</div>
					</div>

					<div class="col-lg-7" >
					<div class="home-logo">
					<a href="index.php">
						<img src="assets/images/logo-v.png" class="" alt="">
						</a>
						</div>		
					</div>

					<div class="home-contacto col-lg-3" >
					
		                    <label for="home-tel">E-mail: ventas@emy.mx</label>
		                    <p class="home-tel"> <a href="<?php echo base_url() ;?>index.php/inicio/registro">Registro</a> </p>
						<!-- <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a> -->
                    </div>


                   <!--  <div class="col-lg-2">
                    	<div class="home-enter">
							<div class="home-inicio">
							<a href="#" data-toggle="modal" data-target="#iniciar-sesion" >Iniciar Sesión /</a>  <a href="#" data-toggle="modal" data-target="#registro" >Registrate</a>
							</div>
							<div class="modal fade" id="iniciar-sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body ">
							        <form id="login" name="login" action="ingreso.php" method="POST">
									<div class="form-group">
										<select class="form-control" name="selector" id="selector">
										<option value="#">Seleccionar</option>
										<option value="1">Cliente</option>
										<option value="2">Edecan</option>
										</select>
									</div>
							          <div class="form-group">
							            
							            <input type="text" class="form-control btn-inicio" id="user" name="user" placeholder="Usuario">
							          </div>
							          <div class="form-group">
							           
							            <input class="form-control btn-inicio" id="password" name="password" placeholder="Password" style="display: block;"/>
							          </div>
							        </form>
							      </div>
							      <div class="modal-footer">
							        
							        <input type="submit" id="boton_enviar" class="btn btn-contacto text-center btn-inicio" value="Entrar">
							      </div>
							    </div>
							  </div>
							</div>

<!--*********************************************** modal de registro **************************************************-->
	<div class="modal fade bd-example-modal-lg" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

		  <div class="modal-dialog modal-lg">
				<div class="modal-content">

				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
							    
		<div class="modal-body ">
						        
					<div class="form-group">
						<select class="form-control" id="status" name="status" onChange="mostrar(this.value);">
						<option value="#">Seleccionar</option>
						<option value="cliente">Cliente</option>
						<option value="edecan">Edecan</option>
						</select>
					</div>
					
<!-- ******************************input de formulario de registro *************************************************** -->
			<div id="cliente" class="col-md-12" style="display:none;">
				<form action="emy_registro.php" method="post">
<h4>Datos del Cliente.</h4>
<hr>
					<div class="row">

						

							<input type="hidden" value="1" name="cliente">

								<div class="form-group col-md-4">
									<input type="text" class="form-control btn-inicio" name="nombre-empresa" id="nombre-empresa" placeholder="Nombre de la Empresa" required>
								</div>

								<div class="form-group col-md-4">
									<input type="text" class="form-control btn-inicio" name="nombre-contacto" id="nombre-contacto" placeholder="Nombre del Contacto" required>
								</div>

								<div class="form-group col-md-4">
									<input type="text" class="form-control btn-inicio" name="apellido" id="apellido" placeholder="Apellido" required>

								</div>

								<div class="form-group col-md-6">

								<input type="tel" class="form-control btn-inicio" name="tel" id="tel" placeholder="Numero teléfonico" required>

								</div>

								<div class="form-group col-md-6">
									<input type="text" class="form-control btn-inicio" name="email" id="email" placeholder="E-mail" required>

								</div>


								<div class="form-group col-md-4">

									<input type="text" class="form-control btn-inicio" name="ciudad" id="ciudad" placeholder="Ciudad" required>

								</div>

								
						</div>		

<h4>Datos de registro.</h4>
<hr>
<div class="row">
								<div class="form-group col-md-6">
								
								<input type="text" class="form-control btn-inicio" id="usuario" name="usuario" placeholder="Usuario">
								</div>

						        <div class="form-group col-md-6">
						           
						        <input class="form-control btn-inicio" id="password" name="password" placeholder="Password" />
						        </div>

								<div class="modal-footer col-md-12">
								
								<input type="submit" class="btn btn-contacto text-center btn-inicio" value="Registrar">
								</div>

						
					</div>
						</form>
			</div>		        
	</div>
							      

							      

							  


<!-- *****************************input de formulario de registro ***************************************************** -->


<!-- ******************************input de formulario de registro *************************************************** -->
			<div id="edecan" class="col-md-12" style="display:none;">
				<form id="form-edecan" action="emy_registro.php" method="post">
<h4>Datos Personales.</h4>
<hr>
					<div class="row">

						

							<input type="hidden" value="2" name="cliente">

								<div class="form-group col-md-6">
									<input type="text" class="form-control btn-inicio" name="nombre" id="nombre" placeholder="Nombre (s)" required>
								</div>

								<div class="form-group col-md-6">
									<input type="text" class="form-control btn-inicio" name="apellido" id="apellido" placeholder="Apellido" required>

								</div>

								<div class="form-group col-md-6">

								<input type="tel" class="form-control btn-inicio" name="tel" id="tel" placeholder="Numero teléfonico" pattern="[0-9]{8}" required>

								</div>

								<div class="form-group col-md-6">
									<input type="text" class="form-control btn-inicio" name="email" id="email" placeholder="E-mail" required />

								</div>


								<div class="form-group col-md-4">

									<input type="text" class="form-control btn-inicio" name="ciudad" id="ciudad" placeholder="Ciudad en que radicas" required />

								</div>

								
						</div>		

<h4>Datos de registro.</h4>
<hr>
<div class="row">
								<div class="form-group col-md-6">
								
								<input type="text" class="form-control btn-inicio" id="usuario" name="usuario" placeholder="Usuario">
								</div>

						        <div class="form-group col-md-6">
						           
						        <input class="form-control btn-inicio" id="password" name="password" placeholder="Password" />
						        </div>

								<div class="modal-footer col-md-12">
								
								<input type="submit" class="btn btn-contacto text-center btn-inicio" value="Registrar">
								</div>

						
					</div>
						</form>
			</div>		        
	</div>
			 				      

							      

							    </div> <!-- modal-content -->
							  </div> <!-- modal-dialog modal-lg -->
							</div> <!-- exampleModalLabel -->


<!-- *****************************input de formulario de registro ***************************************************** -->






<!-- *****************************CIERRE de DIV´s  ***************************************************** -->

    		</div>
		</div>
	</div>
</div>

<!-- *****************************CIERRE de DIV´s ***************************************************** -->

