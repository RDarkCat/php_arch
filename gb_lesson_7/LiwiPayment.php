<?php


class LiwiPayment implements IPayment
{
    public function pay(array $order)
    {
        return 'Success';
    }
}