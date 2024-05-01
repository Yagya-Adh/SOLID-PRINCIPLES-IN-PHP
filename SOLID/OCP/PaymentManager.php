<?php

class PaymentManager
{

    protected $paymentMethod;

    // dependancy injection woth interface
    public function __construct(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function process()
    {

        $this->paymentMethod->processPayment();

        // ... and other payment stuff
    }
}