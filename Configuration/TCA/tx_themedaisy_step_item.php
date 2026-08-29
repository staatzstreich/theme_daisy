<?php

declare(strict_types=1);

/*
 * This file is part of the Michaelstaatz TYPO3 extensions.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


return [
    'ctrl' => [
        'title' => 'Schritt',
        'label' => 'label',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'hideTable' => true,
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'columns' => [
        'label' => [
            'label' => 'Beschriftung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'done' => [
            'label' => 'Abgeschlossen',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => 'label, done',
        ],
    ],
];
