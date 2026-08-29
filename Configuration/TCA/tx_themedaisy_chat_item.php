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
        'title' => 'Chat message',
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
            'label' => 'Sender',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,required',
            ],
        ],
        'message' => [
            'label' => 'Message',
            'config' => [
                'type' => 'text',
                'rows' => 3,
            ],
        ],
        'side' => [
            'label' => 'Side',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Left', 'value' => 'start'],
                    ['label' => 'Right', 'value' => 'end'],
                ],
                'default' => 'start',
            ],
        ],
        'time' => [
            'label' => 'Time',
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
