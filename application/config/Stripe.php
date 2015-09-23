<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_sYVEehEYsyyrCc8Fp94xIeMC",
  "publishable_key" => "pk_test_XUsn5ZRkIaNVEkxsbIEvpXem"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>