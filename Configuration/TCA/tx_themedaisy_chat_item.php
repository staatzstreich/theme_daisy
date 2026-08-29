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
        'title' => 'Chat-Nachricht',
        'label' => 'author',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'hideTable' => true,
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'columns' => [
        'author' => [
            'label' => 'Absender',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,required',
            ],
        ],
        'message' => [
            'label' => 'Nachricht',
            'config' => [
                'type' => 'text',
                'rows' => 3,
            ],
        ],
        'side' => [
            'label' => 'Seite',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Links', 'value' => 'start'],
                    ['label' => 'Rechts', 'value' => 'end'],
                ],
                'default' => 'start',
            ],
        ],
        'time' => [
            'label' => 'Zeit',
            'config' => [
                'type' => 'input',
                'size' => 10,
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => 'author, message, side, time',
        ],
    ],
];
