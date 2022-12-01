<?php

namespace App\Controllers;

class InvoicesController
{
    public function index() : View
    {
        return View::make('invoices/index');
    }

    public function create() : View
    {
        return View::make('invoices/create');
    }

    public function store() :void {
        $amount = $_POST['amount'];
        echo 'amount - ' . $amount;
    }
}