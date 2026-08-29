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
        'title' => 'Accordion-Eintrag',
        'label' => 'question',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'hideTable' => true,
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'columns' => [
        'question' => [
            'label' => 'Frage',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim,required',
            ],
        ],
        'answer' => [
            'label' => 'Antwort',
            'config' => [
                'type' => 'text',
                'rows' => 5,
                'enableRichtext' => true,
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => 'question, answer',
        ],
    ],
];
