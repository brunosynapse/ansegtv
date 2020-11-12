<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Category extends Enum
{
    const greenBuilding = 1;
    const SaneamentoBasico = 2;
    const reabilitaçãoAreasContaminadas = 3;
    const qualidadeVida = 4;
    const desenvolvimentoEconomicoProtecaoMeioAmbiente = 5;
    const poluicaoAmbientalQualidadeAr = 6;
    const desenvolvimentoImobiliarioUrbanistico = 7;
    const areasVerdesUrbanas = 8;
    const lixoResíduosSolidos = 9;
    const entrevista = 10;
}
