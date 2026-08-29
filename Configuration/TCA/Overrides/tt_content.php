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
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.primary', 'value' => 'primary'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.secondary', 'value' => 'secondary'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.accent', 'value' => 'accent'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.neutral', 'value' => 'neutral'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.info', 'value' => 'info'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.success', 'value' => 'success'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.warning', 'value' => 'warning'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_variant.I.error', 'value' => 'error'],
                ],
                'default' => 'info',
            ],
        ],
        'tx_themedaisy_soft' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_soft',
            'config' => [
                'type' => 'check',
                'default' => 1,
            ],
        ],
        'tx_themedaisy_size' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_size',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_size.I.xs', 'value' => 'xs'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_size.I.sm', 'value' => 'sm'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_size.I.md', 'value' => 'md'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_size.I.lg', 'value' => 'lg'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_size.I.xl', 'value' => 'xl'],
                ],
                'default' => 'md',
            ],
        ],
        'tx_themedaisy_link' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_link',
            'config' => [
                'type' => 'link',
                'size' => 40,
            ],
        ],
        'tx_themedaisy_link_label' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_link_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'tx_themedaisy_countdown_value' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_countdown_value',
            'config' => [
                'type' => 'number',
                'default' => 0,
            ],
        ],
        'tx_themedaisy_countdown_label' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_countdown_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'tx_themedaisy_mockup_type' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_mockup_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_mockup_type.I.browser', 'value' => 'browser'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_mockup_type.I.code', 'value' => 'code'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_mockup_type.I.phone', 'value' => 'phone'],
                    ['label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_mockup_type.I.window', 'value' => 'window'],
                ],
                'default' => 'browser',
            ],
        ],
        'tx_themedaisy_mockup_url' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_mockup_url',
            'config' => [
                'type' => 'input',
                'size' => 40,
            ],
        ],
        'tx_themedaisy_accordion_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_accordion_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_accordion_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_stat_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_stat_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_stat_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_timeline_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_timeline_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_timeline_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_step_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_step_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_step_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_tab_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_tab_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_tab_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_chat_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_chat_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_chat_item',
                'foreign_field' => 'tt_content',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
        'tx_themedaisy_card_items' => [
            'label' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.tx_themedaisy_card_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_themedaisy_card_item',
                'foreign_field' => 'tt_content',
                'foreign_sortby' => 'sorting',
                'appearance' => ['collapseAll' => false, 'useSortable' => true],
            ],
        ],
    ];

    // Item group for all daisyUI content elements (CType dropdown + wizard)
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'daisyui',
        'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.group.daisyui',
        'after:default'
    );

    // -----------------------------------------------------------------
    // Register CTypes (auto-registers into the "New Content Element"
    // wizard via TCA select items since TYPO3 v13)
    // -----------------------------------------------------------------
    // Icon identifiers are all part of TYPO3's own bundled icon set
    // (T3Icons, EXT:core/Resources/Public/Icons/T3Icons/) and therefore
    // already registered core-side -- no custom Icons.php needed.
    $elements = [
        'daisy_alert' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_alert.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_alert.description', 'icon' => 'content-info'],
        'daisy_card' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_card.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_card.description', 'icon' => 'content-card'],
        'daisy_hero' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_hero.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_hero.description', 'icon' => 'content-panel'],
        'daisy_button' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_button.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_button.description', 'icon' => 'content-widget-calltoaction'],
        'daisy_countdown' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_countdown.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_countdown.description', 'icon' => 'content-clock'],
        'daisy_mockup' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_mockup.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_mockup.description', 'icon' => 'content-device-desktop'],
        'daisy_accordion' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_accordion.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_accordion.description', 'icon' => 'content-accordion'],
        'daisy_stats' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_stats.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_stats.description', 'icon' => 'content-widget-number'],
        'daisy_timeline' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_timeline.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_timeline.description', 'icon' => 'content-timeline'],
        'daisy_steps' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_steps.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_steps.description', 'icon' => 'content-listgroup'],
        'daisy_tabs' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_tabs.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_tabs.description', 'icon' => 'content-tab'],
        'daisy_carousel' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_carousel.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_carousel.description', 'icon' => 'content-carousel-image'],
        'daisy_chat' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_chat.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_chat.description', 'icon' => 'content-message-dots'],
        'daisy_cardgrid' => ['title' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_cardgrid.title', 'description' => 'LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.daisy_cardgrid.description', 'icon' => 'content-grid-container'],
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
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, bodytext;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.message, tx_themedaisy_variant, tx_themedaisy_soft',
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
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.label, tx_themedaisy_link, tx_themedaisy_variant, tx_themedaisy_size',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_countdown'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_countdown_value, tx_themedaisy_countdown_label',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_mockup'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_mockup_type, tx_themedaisy_mockup_url, bodytext;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.code, image',
        'columnsOverrides' => [
            'bodytext' => ['config' => ['enableRichtext' => false, 'rows' => 6]],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_accordion'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_accordion_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_stats'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_stat_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_timeline'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_timeline_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_steps'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_step_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_tabs'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_tab_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_carousel'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, image',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_chat'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_chat_items',
    ];
    $GLOBALS['TCA']['tt_content']['types']['daisy_cardgrid'] = [
        'showitem' => 'CType, header;LLL:EXT:theme_daisy/Resources/Private/Language/backend_fields.xlf:tt_content.title.optional, tx_themedaisy_card_items',
    ];
});
