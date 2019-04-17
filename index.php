<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
<section id="missatges">




<p><span>10:40PM - Homer: </span>I'll look it up.</p>
<p><span>10:39PM - Homer: </span>Fine.</p>
<p><span>10:39PM - Marge: </span>I really think that was the character's name, Don Quixote.</p>
<p><span>10:38PM - Homer: </span>No!</p>
<p><span>10:37PM - Marge: </span>Don Quixote</p>
<p><span>10:36PM - Homer: </span>No, that's not it. What's his name? "The Man of La Mancha."</p>
<p><span>10:36PM - Marge: </span>Don Quixote?</p>
<p><span>10:34PM - Homer: </span>I'm like that guy, that Spanish guy. You know, he fought the windmills.</p>
</section>


<?php $con = mysqli_connect('localhost', 'root', '', 'xat'); ?>
 <?php if (mysqli_connect_errno()){
   echo 'No es pot accedir a la base de dades: '.mysqli_connect_error();
   include 'connexioBD.php';
 } ?>
 <?php $sql = "SELECT usuari, texto, hora FROM missatges ORDER BY hora";
  $result = mysqli_query($con, $sql);
  ?>
  <p>
  <?php while ($row = mysqli_fetch_assoc($result)) {
    printf("%s %s %s <p /", $row['hora'], $row['usuari'], $row['texto']);
  } ?></p>
  <?php mysqli_free_result($result); ?>
  <?php mysqli_close($con);?>
</section>
<br>
<section id="formulari">
<form method="post" action="insertar.php">
<p>Nombre: <input type="text" name="nombre" /></p>
<p>Mensaje: <input type="text" name="texto" /></p>
<p><input type="submit" /></p>
</form>
</section>
<section id="errors">
<p>Linia que muestra los mensajes de error</p>
</section>
</body>
</html>