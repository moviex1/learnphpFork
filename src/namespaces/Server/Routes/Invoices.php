<?php

namespace Namespaces\Server\Routes;

class Invoices
{
    public function index() : void
    {
        echo "Invoices";
    }
    public function create() : void{
        echo '<form action="/invoices/create" method="post"><label>Amount</label><input type="text" name="amount"></form>';
    }
    public function store() :void {
        $amount = $_POST['amount'];
        echo 'amount - ' . $amount;
    }
}