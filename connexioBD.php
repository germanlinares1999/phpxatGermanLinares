

<?php $con = mysqli_connect('localhost', 'root', '', 'xat'); ?>
<?php if (mysqli_connect_errno()){
   echo 'No es pot accedir a la base de dades: '.mysqli_connect_error();
} ?>