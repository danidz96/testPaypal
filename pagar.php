<?php

if (!isset($_POST['producto'], $_POST['precio'])) {
  exit("Algo ha ido mal");
}

use PayPal\Api\Payer;

require 'config.php';

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
$envio = 0;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');

 ?>
