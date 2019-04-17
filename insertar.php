<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>insertar.php</title>
  </head>
  <body>



Hola <?php echo htmlspecialchars($_POST['nombre']); ?>. <br><br>
Tu mensaje es el siguiente: <?php echo htmlspecialchars($_POST['texto']); ?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'xat');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    include 'connexioBD.php';
}

$name = htmlspecialchars($_POST['nombre']);
$mensaje = htmlspecialchars($_POST['texto']);
$horar = date('Y-m-d H:i:s');


$sql = "INSERT INTO missatges (usuari, texto, hora)
VALUES ('$name', '$mensaje', '$horar')";

$validarnombre = mysqli_real_escape_string($conn, $name); 
$validarmensaje = mysqli_real_escape_string($conn, $mensaje); 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: index.php");
exit(); 

$conn->close();



 ?>