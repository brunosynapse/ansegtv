<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PermissionType extends Enum
{

    const CREATE_USER = 'create-user';
    const EDIT_ANOTHER_USER = 'edit-another-user';
    const UPDATE_ANOTHER_USER = 'update-another-user';
    const DELETE_ANOTHER_USER = 'delete-another-user';
    const SHOW_ANOTHER_USER = 'show-another-user';
    const SHOW_ALL_USERS = 'show-all-user';

    public static $TYPES = [
        self::CREATE_USER => [
            'translation' => 'Criar usuários',
        ],
        self::EDIT_ANOTHER_USER => [
            'translation' => 'Editar outros usuários',
        ],
        self::UPDATE_ANOTHER_USER => [
            'translation' => 'Atualizar outros usuários',
        ],
        self::DELETE_ANOTHER_USER => [
            'translation' => 'Excluir outros usuários',
        ],
        self::SHOW_ANOTHER_USER => [
            'translation' => 'Exibir outros usuários',
        ],
        self::SHOW_ALL_USERS => [
            'translation' => 'Exibir todos usuários',
        ]
    ];
}
