<?php include('header.php');?>
<div class="wrapper vertical-flex">
	<div class="form-container container center">
		<div class="form-wrapper">
			<h1>Agregar <span class="orange">Cliente</span></h1>
			<div class="input">
				<input class="orange-border" type="text" placeholder="Usuario"><img src="img/index/login/user.png" alt="user">
			</div>
			<div class="input">
				<input class="orange-border" type="text" placeholder="Dirección"><img src="img/clientes/pointer.png" alt="pointer">
			</div>
			<div class="input">
				<div class="col-sm-6 no-padding form-col">
					<input class="orange-border" type="text" placeholder="Télefono"><img src="img/clientes/phone.png" alt="phone">
				</div>
				<div class="col-sm-6 no-padding form-col">
					<input id="datepicker" class="orange-border" type="text" placeholder="Fecha"><img src="img/clientes/calendar.png" alt="calendar">
				</div>
			</div>
			<div class="input">
				<input class="orange-border" type="text" placeholder="Correo"><img src="img/clientes/mail.png" alt="mail">
			</div>
			<div class="input">
				<input class="orange-border" type="password" placeholder="Contraseña"><img src="img/index/login/password.png" alt="password">
			</div>
			<div class="button-container">
				<button class="orange-btn">Agregar</button>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>