<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PostStatus extends Enum
{
    const published = 'Publicado';
    const peding =   'Pendente';
    const draft = 'Rascunho';
}
