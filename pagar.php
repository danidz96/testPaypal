<?php

if (!isset($_POST['producto'], $_POST['precio'])) {
  exit("Algo ha ido mal");
}

require 'config.php';

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
$envio = 0;
$total = $precio + $envio;


 ?>
