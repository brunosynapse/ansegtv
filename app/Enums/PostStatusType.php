<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostStatusType extends Enum
{
    const PUBLISHED = 1;
    const PENDING = 2;
    const DRAFT = 3;

    public static $TYPES = [
        self::PUBLISHED => [
            'translation' => 'Publicado',
            'class' => 'success',
        ],
        self::PENDING => [
            'translation' => 'Pendente',
            'class' => 'light',
        ],
        self::DRAFT => [
            'translation' => 'Rascunho',
            'class' => 'dark',
        ],
    ];

}
