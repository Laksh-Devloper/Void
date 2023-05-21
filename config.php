<?php
require('stripe-php-master/init.php');

$pk = "pk_test_51MqcscSB4pZtb52kIdScfSbyZb05J10dYScvrHd6aothsS1sD79ybiHUTyohFjUH0JeaEdcEEyMhjIFOR0KAxUtT00IwjLmzYk";

$sk = "sk_test_51MqcscSB4pZtb52k6JkvlTQzXYFu6ZTZ9Bgx9KLD9VT9pU3n8QrnNjapgr4fNJJTnAOSXRZQpRDwJXaZOHP7mimy00Ko6ZIyla"; 

\Stripe\Stripe::setApiKey($sk);

?>