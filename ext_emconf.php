<?php

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

$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme: daisyUI',
    'description' => 'daisyUI 5 / Tailwind v4 theme for TYPO3: Fluid components, styled content elements and backend layouts.',
    'category' => 'templates',
    'author' => 'Michael Staatz',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.99.99',
        ],
    ],
];