<?php

namespace Namespaces\Interfaces;

class CollectorService
{
    public function collectDebt(DebtCollector $collector) : string{
        $owedAmount = mt_rand(100,1000);
        $collected = $collector->collectDebt($owedAmount);
        return 'Collected $' . $collected . ' of $' . $owedAmount;

    }

}