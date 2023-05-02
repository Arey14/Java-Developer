<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

  echo "Usuario: " . $usuario . "<br>";
  echo "Contrasena: " . $contrasena;
}
?>