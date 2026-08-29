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
        'title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_card_item.title',
        'label' => 'title',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'hideTable' => true,
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'columns' => [
        'icon' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_card_item.icon',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'max' => 64,
            ],
        ],
        'title' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_card_item.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_card_item.description',
            'config' => [
                'type' => 'text',
                'rows' => 3,
            ],
        ],
        'link' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_card_item.link',
            'config' => [
                'type' => 'link',
            ],
        ],
        'link_label' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_card_item.link_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => 'icon, title, description, link, link_label',
        ],
    ],
];
