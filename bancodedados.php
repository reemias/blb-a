<?php
$localhots = 'localhost';
$user = 'root';
$passw = '';
$banco = 'login';

$conecta = mysqli_connect($localhots,$user,$passw,$banco);

$sql = mysqli_query($conecta, "SELECT * FROM usuario");

echo mysqli_num_rows($sql);

?>