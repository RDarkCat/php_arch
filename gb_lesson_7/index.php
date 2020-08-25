<?php

spl_autoload_register(function ($className){
   require_once $className . '.php';
});

function testPayment($paymentType, array $order)
{
        $payment = new PaymentChooser();
        $payment->setPayment($paymentType);
        $payment->payExecute($order);
}

$order = [];

array_push($order, new Socks(43, 150));
array_push($order, new Socks(44, 200));
array_push($order, new Socks(45, 250));

testPayment(new LiwiPayment(), $order);