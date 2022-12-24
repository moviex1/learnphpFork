<?php

namespace App\Models;

class Invoice extends Model
{
    public function create(float $amount, int $userId) : int
    {

        $smtInvoice = $this->db->prepare(
            'INSERT INTO invoices (amount, user_id) 
                    VALUES (?, ?)');
        $smtInvoice->execute([$amount, $userId]);

        return $userId;
    }

    public function find(int $invoiceId){
        $smtInvoice = $this->db->prepare(
            'SELECT u.id, i.amount, u.full_name  
                    FROM invoices i
                    LEFT JOIN users u ON u.id = i.user_id
                    WHERE i.user_id = ?'
        );
        $smtInvoice->execute([$invoiceId]);
        $invoice = $smtInvoice->fetch();

        return $invoice ?: [];
    }
}