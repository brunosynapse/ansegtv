<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostPositionType extends Enum
{
    const HIGHTLIGHT_1 = 1;
    const HIGHTLIGHT_2 = 2;
    const HIGHTLIGHT_3 = 3;
    const HIGHTLIGHT_4 = null;

    public static $TYPES = [
        self::HIGHTLIGHT_1 => [
            'translation' => 'Destaque 1',
        ],
        self::HIGHTLIGHT_2 => [
            'translation' => 'Destaque 2',
        ],
        self::HIGHTLIGHT_3 => [
            'translation' => 'Destaque 3',
        ],
        self::HIGHTLIGHT_4 => [
            'translation' => 'Sem Destaque',
        ],
    ];
}
