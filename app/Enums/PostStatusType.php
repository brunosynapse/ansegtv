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
            'translation' => 'Publicada',
            'class' => 'success',
        ],
        self::PENDING => [
            'translation' => 'Agendada',
            'class' => 'warning',
        ],
        self::DRAFT => [
            'translation' => 'Não publicada',
            'class' => 'dark',
        ],
    ];

}
