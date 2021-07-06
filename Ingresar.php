<?php
$servername = "remotemysql.com";
$username = "KQx8ytSRmj";
$password = "BNXj6scwiT";
$dbname = "KQx8ytSRmj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuario (id_usuario, nombre_usuario, fecha)
VALUES ('1', 'arturo', '1992/07/03')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pag Principal</title>
</head>

<body>
<p>Bienvenidos a la web del Grupo 1 del curso de PDM de la PUCP</p>
<p><a href="Ingresar.php">Inicio</a> | <a href="El proyecto.php">El proyecto</a> | <a href="Como funciona.php">¿Cómo funciona?</a> | <a href="Contactenos.php">Contactenos</a> | <a href="Ingresar.php">Ingresar</a></p>
<p>Ingrese sus datos</p>
</body>
</html>