<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostType extends Enum
{
    const PUBLISHED = 'published';
    const PENDING =   'pending';
    const DRAFT = 'draft';

    const TYPES = [
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
