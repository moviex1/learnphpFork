<?php declare(strict_types=1);

namespace Namespaces\Stripe;

class Transaction
{
    private static int $count = 0;
    private int $amount;
    private string $description;

    public function __construct(int $amount, string $description )
    {
        $this->amount = $amount;
        $this->description = $description;

        self::$count++;
    }

    public static function getCount () : int{
        return self::$count;
    }
    public function getAmount () : int{
        return $this->amount;
    }

}