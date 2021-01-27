<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostStatusType extends Enum
{
    const PUBLISHED = 1;
    const PENDING =   2;
    const DRAFT = 3;

    public static $TYPES = [
        self::PUBLISHED => [
            'translation' => 'Publicado',
        ],
        self::PENDING => [
            'translation' => 'Pendente',
        ],
        self::DRAFT => [
            'translation' => 'Rascunho',
        ],
    ];

}
