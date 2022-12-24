<?php

namespace App\Models;

class SignUp extends Model
{

    public function __construct(private User $userModel, private Invoice $invoiceModel)
    {
        parent::__construct();
    }

    public function register(array $userInfo, array $invoiceInfo) : int
    {
        try {
            $this->db->beginTransaction();

            $userId = $this->userModel->create($userInfo['email'],$userInfo['name']);
            $invoiceId = $this->invoiceModel->create($invoiceInfo['amount'], $userId);


            $this->db->commit();

        } catch (\Throwable $e){
            if($this->db->inTransaction()){
                $this->db->rollBack();
            }

            throw $e;
        }

        return $invoiceId;
    }
}