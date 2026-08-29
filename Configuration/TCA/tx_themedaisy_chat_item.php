<?php

declare(strict_types=1);

/*
 * This file is part of the michaelstaatz/theme-daisy extension.
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
        'title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.title',
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
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.author',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,required',
            ],
        ],
        'message' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.message',
            'config' => [
                'type' => 'text',
                'rows' => 3,
            ],
        ],
        'side' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.side',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.side.I.start', 'value' => 'start'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.side.I.end', 'value' => 'end'],
                ],
                'default' => 'start',
            ],
        ],
        'time' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_chat_item.time',
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
