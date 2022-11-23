<?php

namespace Namespaces\Paddle;

class Transaction
{
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';

    private const ALL_STATUSES = [
        self::STATUS_PAID => 'Paid',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_DECLINED => 'Declined'
    ];

    public function __construct()
    {
    }

    public function setStatus(string $status) : self{
        if(!isset(self::ALL_STATUSES[$status])){
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;


        return $this;
    }

}