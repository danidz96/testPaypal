<?php

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/testPaypal');

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'AebP0y8pW7zkkntmQa_6LtVcPnmUVTNgdBNdJjU9nTMw5IaMQflDtSeYgXflkbYcFb2yW6CNm3SGzxvX',//ID Cliente
    'ECdem7uOcPEhpUGrMBv2CuhQpTU2ANk25uC9Gh1c6cfoX1cryNVgZHi8FujRz_IXRJKv0VZfFnd91H5T'//Secret
    )
  );


 ?>
