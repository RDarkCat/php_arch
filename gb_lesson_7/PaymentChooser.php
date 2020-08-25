<?php


class PaymentChooser
{
    private IPayment $payment;

    public function setPayment(IPayment $payment)
    {
        $this->payment = $payment;
        echo "Done";
    }

    public function payExecute(array $order)
    {
        return $this->payment->pay($order);
    }
}