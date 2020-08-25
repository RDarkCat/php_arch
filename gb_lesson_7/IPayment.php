<?php

interface IPayment
{
    public function pay(array $order);
    public function returnFromPay(array $order);
}
