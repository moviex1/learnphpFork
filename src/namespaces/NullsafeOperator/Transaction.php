<?php declare(strict_types=1);

namespace Namespaces\NullsafeOperator;

class Transaction {
        private
        float $amount;
    private string $description;
    private ?Customer $customer = null;

    public function __construct(float $amount, string $description)
        {
            $this->amount = $amount;
            $this->description = $description;
        }
    public function payTaxes(float $taxes)
        {
            $this->amount -= $taxes;
        }
    public function applyDiscount(float $rate)
        {
            $this->amount -= $rate;
        }
    public function getPayment(float $payment)
        {
            $this->amount += $payment;
        }
    public function checkWallet(): float
        {
            return $this->amount;
        }
//    public function __destruct()
//    {
//       echo "Script was end";
//    }
    public function getCustomer()
        {
            return $this->customer;
        }
}