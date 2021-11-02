<!--Brenda Karina Recinos Quezada
Matrícula: ES1611306203
Grupo: DS-DPW1-2102-B2-003-->
<?php
	$name  = $_POST['name'];
	$age  = $_POST['age'];
	$direction  = $_POST['direction'];
	$employee  = $_POST['phone'];
	$advisors  = $_POST['advisors'];
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<!--estilos css-->
    <link rel="stylesheet" href="css/welcome.css">
	</head>
	<body>
		<div id="header">
		  <ul class="nav">
		      <img class="logo" src="img/logo.png">
					<li><a href="index.html">Inicio</a></li>
		      <li><a href="clients.html">Clientes</a>
		      <li><a href="advisor.html">Asesor</a>
		        <ul>
		          <li><a href="#">Asesor de cuentas</a></li>
		          <li><a href="#">Asesor de seguros</a></li>
		          <li><a href="#">Asesor de ahorros</a></li>
		        </ul>
		      </li>
		      <li><a href="branchs.html">Sucursales</a></li>
		      <li><a href="employees.html">Empleados</a></li>
		  </ul>
		</div>
		<div id="register">
		<h1>Registro exitoso como Asesor </h1>
		<p>Bienvenido <?php echo $name;?> </p>
		<p>Tus datos registrados son:</p>
		<p>Nombre: <?php echo $name;?> </p>
		<p>Edad: <?php echo $age?> </p>
		<p>Dirección: <?php echo $direction;?> </p>
		<p>Número de empleado: <?php echo $employee;?> </p>
		<p>Tipo de asesor: <?php echo $advisors;?> </p>
		</div>
		<div class="footer">
		  <p>CrediMex</p>
		  <p>Copyright &copy; 2021 Karina Quezada</p>
		</div>
	</body>
</html>
