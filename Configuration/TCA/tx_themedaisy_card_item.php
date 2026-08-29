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
        'title' => 'Card item',
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
            'label' => 'Symbol (emoji or character)',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'max' => 64,
            ],
        ],
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'description' => [
            'label' => 'Description',
            'config' => [
                'type' => 'text',
                'rows' => 3,
            ],
        ],
        'link' => [
            'label' => 'Link',
            'config' => [
                'type' => 'link',
            ],
        ],
        'link_label' => [
            'label' => 'Link text',
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
