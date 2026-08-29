/*
 * theme_daisy client behaviour.
 *
 * The initial (non-flickering) application of a stored theme happens in a
 * tiny inline script in the page layout <head>, BEFORE this file runs -
 * keep the storage key below in sync with that script.
 *
 * This file does four things:
 *  - marks the active theme in the switcher menu (daisyUI menu-active),
 *  - applies clicked theme options and persists them,
 *  - closes the <details class="dropdown"> panels (theme switcher, mobile
 *    menu) after use and on clicks outside of them.
 */
(function () {
    var STORAGE_KEY = 'theme-daisy-theme';
    var root = document.documentElement;

    function currentTheme() {
        return root.getAttribute('data-theme') || 'light';
    }

    function persist(theme) {
        try {
            localStorage.setItem(STORAGE_KEY, theme);
        } catch (e) {
            // localStorage unavailable (e.g. private browsing) - the theme
            // still applies for the current page load.
        }
    }

    function closeDropdowns(except) {
        document.querySelectorAll('details.dropdown[open]').forEach(function (dropdown) {
            if (dropdown !== except) {
                dropdown.removeAttribute('open');
            }
        });
    }

    function setActiveMarker() {
        var active = currentTheme();
        document.querySelectorAll('[data-theme-value]').forEach(function (option) {
            var isActive = option.getAttribute('data-theme-value') === active;
            option.classList.toggle('menu-active', isActive);
            option.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });
    }

    document.addEventListener('click', function (event) {
        var option = event.target.closest('[data-theme-value]');
        if (option) {
            root.setAttribute('data-theme', option.getAttribute('data-theme-value'));
            persist(currentTheme());
            closeDropdowns();
            setActiveMarker();
            return;
        }

        var dropdown = event.target.closest('details.dropdown');
        if (!dropdown) {
            // Click outside every dropdown: close the open ones (a native
            // <details> toggle does not do that by itself).
            closeDropdowns(null);
            return;
        }

        if (dropdown.hasAttribute('open')) {
            closeDropdowns(dropdown);
        }
    });

    setActiveMarker();
})();