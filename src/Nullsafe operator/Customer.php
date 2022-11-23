<?php

class Customer {
    private ?PaymentProfile $paymentProfile = null;

    public function getPaymentProfile(){
        return $this->paymentProfile;
    }
}