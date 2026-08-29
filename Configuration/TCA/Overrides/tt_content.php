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


declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

call_user_func(static function (): void {
    $extKey = 'theme_daisy';

    // -----------------------------------------------------------------
    // Custom fields shared across the new daisyUI content element types
    // -----------------------------------------------------------------
    $GLOBALS['TCA']['tt_content']['columns'] += [
        'tx_themedaisy_variant' => [
            'label' => 'Variant',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Primary', 'value' => 'primary'],
                    ['label' => 'Secondary', 'value' => 'secondary'],
                    ['label' => 'Accent', 'value' => 'accent'],
                    ['label' => 'Neutral', 'value' => 'neutral'],
                    ['label' => 'Info', 'value' => 'info'],
                    ['label' => 'Success', 'value' => 'success'],
                    ['label' => 'Warning', 'value' => 'warning'],
                    ['label' => 'Error', 'value' => 'error'],
                ],
                'default' => 'info',
            ],
        ],
        'tx_themedaisy_soft' => [
            'label' => 'Soft background',
            'config' => [
                'type' => 'check',
                'default' => 1,
            ],
        ],
        'tx_themedaisy_size' => [
            'label' => 'Size',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Extra small', 'value' => 'xs'],
                    ['label' => 'Small', 'value' => 'sm'],
                    ['label' => 'Medium', 'value' => 'md'],
                    ['label' => 'Large', 'value' => 'lg'],
                    ['label' => 'Extra large', 'value' => 'xl'],
                ],
                'default' => 'md',
            ],
        ],
        'tx_themedaisy_link' => [
            'label' => 'Link',
            'config' => [
                'type' => 'link',
                'size' => 40,
            ],
        ],
        'tx_themedaisy_link_label' => [
            'label' => 'Link label',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'tx_themedaisy_countdown_value' => [
            'label' => 'Number',
            'config' => [
                'type' => 'number',
                'default' => 0,
            ],
        ],
        'tx_themedaisy_countdown_label' => [
            'label' => 'Caption',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'tx_themedaisy_mockup_type' => [
            'label' => 'Mockup type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Browser', 'value' => 'browser'],
                    ['label' => 'Code', 'value' => 'code'],
                    ['label' => 'Phone', 'value' => 'phone'],
                    ['label' => 'Window', 'value' => 'window'],
                ],
                'default' => 'browser',
            ],
        ],
        'tx_themedaisy_mockup_url' => [
            'label' => 'URL (with type "Browser")',
            'config' => [
                'type' => 'input',
                'size' => 40,
            ],
        ],
        'tx_themedaisy_accordion_items' => [
            'label' => 'Questions & answers',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_accordion_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_stat_items' => [
            'label' => 'Statistics',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_stat_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_timeline_items' => [
            'label' => 'Timeline items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_timeline_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_step_items' => [
            'label' => 'Steps',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_step_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_tab_items' => [
            'label' => 'Tabs',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_tab_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_chat_items' => [
            'label' => 'Messages',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_chat_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_card_items' => [
            'label' => 'Cards',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_card_item',
                'foreign_field' => 'tt_content',
                'foreign_sortby' => 'sorting',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
    ];

    // -----------------------------------------------------------------
    // Register CTypes (auto-registers into the "New Content Element"
    // wizard via TCA select items since TYPO3 v13)
    // -----------------------------------------------------------------
    // Icon identifiers are all part of TYPO3's own bundled icon set
    // (T3Icons, EXT:core/Resources/Public/Icons/T3Icons/) and therefore
    // already registered core-side -- no custom Icons.php needed.
    $elements = [
        'daisy_alert' => ['title' => 'Alert', 'description' => 'Callout box in four states (info/success/warning/error).', 'icon' => 'content-info'],
        'daisy_card' => ['title' => 'Card', 'description' => 'Card with image, title, text and optional button.', 'icon' => 'content-card'],
        'daisy_hero' => ['title' => 'Hero', 'description' => 'Large hero section with title, text, image and call-to-action.', 'icon' => 'content-panel'],
        'daisy_button' => ['title' => 'CTA button', 'description' => 'A single call-to-action button.', 'icon' => 'content-widget-calltoaction'],
        'daisy_countdown' => ['title' => 'Countdown', 'description' => 'Number display, e.g. for a countdown.', 'icon' => 'content-clock'],
        'daisy_mockup' => ['title' => 'Mockup', 'description' => 'Browser, code, phone or window frame around image or code.', 'icon' => 'content-device-desktop'],
        'daisy_accordion' => ['title' => 'Accordion / FAQ', 'description' => 'Expandable question-and-answer list.', 'icon' => 'content-accordion'],
        'daisy_stats' => ['title' => 'Stats', 'description' => 'Row of key figures.', 'icon' => 'content-widget-number'],
        'daisy_timeline' => ['title' => 'Timeline', 'description' => 'Chronological list of events.', 'icon' => 'content-timeline'],
        'daisy_steps' => ['title' => 'Steps', 'description' => 'Numbered sequence of steps, e.g. for processes.', 'icon' => 'content-listgroup'],
        'daisy_tabs' => ['title' => 'Tabs', 'description' => 'Content in switchable tabs.', 'icon' => 'content-tab'],
        'daisy_carousel' => ['title' => 'Carousel', 'description' => 'Swipeable image gallery.', 'icon' => 'content-carousel-image'],
        'daisy_chat' => ['title' => 'Chat / Testimonial', 'description' => 'Chat-style dialog, e.g. for testimonials.', 'icon' => 'content-message-dots'],
        'daisy_cardgrid' => ['title' => 'Card Grid', 'description' => 'Responsive grid of cards with icon, title, text and link.', 'icon' => 'content-grid-container'],
    ];

    foreach ($elements as $cType => $config) {
        ExtensionManagementUtility::addPlugin(
            [
                'label' => $config['title'],
                'description' => $config['description'],
                'group' => 'daisyui',
                'value' => $cType,
                'icon' => $config['icon'],
            ],
            'CType',
            $extKey,
        );
    }

    // -----------------------------------------------------------------
    // Field layout (showitem) per CType
    // -----------------------------------------------------------------
    $GLOBALS['TCA']['tt_content']['types']['daisy_alert'] = [
        'showitem' => 'CType, header;Title (optional), bodytext;Message, tx_themedaisy_variant, tx_themedaisy_soft',
        'columnsOverrides' => [
            'bodytext' => ['config' => ['enableRichtext' => false, 'rows' => 3]],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_card'] = [
        'showitem' => 'CType, header, bodytext, image, tx_themedaisy_link, tx_themedaisy_link_label',
        'columnsOverrides' => [
            'bodytext' => ['config' => ['enableRichtext' => false, 'rows' => 4]],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_hero'] = [
        'showitem' => 'CType, header, subheader, bodytext, image, tx_themedaisy_link, tx_themedaisy_link_label',
        'columnsOverrides' => [
            'bodytext' => ['config' => ['enableRichtext' => false, 'rows' => 3]],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_button'] = [
        'showitem' => 'CType, header;Label, tx_themedaisy_link, tx_themedaisy_variant, tx_themedaisy_size',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_countdown'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_countdown_value, tx_themedaisy_countdown_label',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_mockup'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_mockup_type, tx_themedaisy_mockup_url, bodytext;Code (with type "Code"), image',
        'columnsOverrides' => [
            'bodytext' => ['config' => ['enableRichtext' => false, 'rows' => 6]],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_accordion'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_accordion_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_stats'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_stat_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_timeline'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_timeline_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_steps'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_step_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_tabs'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_tab_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_carousel'] = [
        'showitem' => 'CType, header;Title (optional), image',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_chat'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_chat_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_cardgrid'] = [
        'showitem' => 'CType, header;Title (optional), tx_themedaisy_card_items',
    ];
});
