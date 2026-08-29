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
        'title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_step_item',
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
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_step_item.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'done' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tx_themedaisy_step_item.done',
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
