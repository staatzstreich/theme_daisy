/*
 * theme_daisy client behaviour:
 *  - applies the visitor's stored theme override from localStorage,
 *  - binds the theme switcher select and persists new choices.
 *
 * The initial (non-flickering) application of a stored theme happens in a
 * tiny inline script in the page layout <head>, BEFORE this file runs -
 * keep both scripts' storage key in sync with the one below.
 */
(function () {
    var STORAGE_KEY = 'theme-daisy-theme';
    var root = document.documentElement;
    var select = document.getElementById('theme-switcher');

    var storedTheme = null;
    try {
        storedTheme = localStorage.getItem(STORAGE_KEY);
    } catch (e) {
        storedTheme = null;
    }

    // Reflect an already-stored override in the select (data-theme was
    // already stamped by the inline head script).
    if (select && storedTheme) {
        select.value = storedTheme;
    }

    if (!select) {
        return;
    }

    select.addEventListener('change', function () {
        var theme = select.value;
        root.setAttribute('data-theme', theme);
        try {
            localStorage.setItem(STORAGE_KEY, theme);
        } catch (e) {
            // localStorage unavailable (e.g. private browsing) - theme
            // still applies for the current page load.
        }
    });
})();