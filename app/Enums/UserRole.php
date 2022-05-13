<?php

namespace App\Enums;

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';
    const DELIVERYMAN = 'deliveryman';

    const TYPES = [
        self::ADMIN,
        self::USER,
        self::DELIVERYMAN
    ];
}
