<?php
echo "OPENCLOSe";


$paypalIpn = new PaypalIpn();
$creditCard = new CreditCard();

/*  we can use   $paypalIpn or, $creditCard  inside paymentManager*/

$paymentManager = new PaymentManager($paypalIpn);
$paymentManager->process();
