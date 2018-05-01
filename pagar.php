<?php

if (!isset($_POST['producto'], $_POST['precio'])) {
  exit("Algo ha ido mal");
}

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;

require 'config.php';

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
$envio = 0;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new item();
$articulo->setName($producto)
         ->setCurrency('EUR')
         ->setQuantity(1)
         ->setPrice($precio);

$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));
 ?>
