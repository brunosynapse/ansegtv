<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserType extends Enum
{
    const ADMIN = 'admin';
    const USER = 'user';

    public static $TYPES = [
        self::ADMIN => [
            'translation' => 'Administrador',
        ],
        self::USER => [
            'translation' => 'Usuário',
        ],
    ];
}
