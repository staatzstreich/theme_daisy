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

return static function (): void {
    // Custom CKEditor 5 preset for daisyUI-styled content (see
    // Configuration/RTE/Default.yaml), activated via RTE.default.preset
    // in the ThemeDaisy site set.
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['daisy_default'] = 'EXT:theme_daisy/Configuration/RTE/Default.yaml';
};