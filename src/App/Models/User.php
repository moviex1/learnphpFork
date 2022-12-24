<?php

namespace App\Models;

class User extends Model
{

    public function create(string $email, string $name, bool $isActive = true): int
    {
        $smt = $this->db->prepare(
            'INSERT INTO users (email, full_name, is_active, created_at) 
                    VALUES (?, ?, ?, NOW())'
        );

        $smt->execute([$email, $name, $isActive]);

        return (int)$this->db->lastInsertId();
    }
}