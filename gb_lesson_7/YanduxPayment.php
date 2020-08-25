<?php


class YanduxPayment implements IPayment
{

    public function pay(array $order)
    {
        return 'Success';
    }

    public function returnFromPay(array $order)
    {
        return 'Done';
    }
}