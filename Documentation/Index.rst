.. ============================================================
.. theme_daisy - daisyUI theme for TYPO3
.. ============================================================

.. _introduction:

=============
Introduction
=============

**theme_daisy** is a TYPO3 v14 theme package built on daisyUI 5 and Tailwind CSS v4. It bundles Fluid components, fourteen styled content elements and five backend layouts, so a site can be composed almost entirely from daisyUI primitives - both in the front end and in the page module previews.

Targets TYPO3 14.3+ and PHP 8.3+.

.. _installation:

Installation
============

Install the extension and add it to the dependencies of your site:

.. code-block:: yaml

   dependencies:
     - michaelstaatz/theme-daisy

Then flush the caches. The ThemeDaisy site set comes with sensible TypoScript defaults, a CKEditor preset and all backend layouts - no manual TypoScript includes required.

.. _configuration:

Configuration
=============

The theme exposes a single set setting:

``theme.daisy.defaultTheme``
    The daisyUI theme set as the ``data-theme`` attribute on the ``<html>`` element. Any of the 35 built-in daisyUI themes (``light``, ``dark``, ``cupcake``, ``dracula``, ...). Default: ``light``.

Visitors can override the theme client-side through the navbar theme switcher; their choice is stored in the browser and takes precedence over the server-rendered default.

.. _backend-layouts:

Backend layouts
===============

Five layouts are registered under “Backend Layouts” and map 1:1 onto Fluid page templates in ``Resources/Private/Templates/Pages/``:

*daisystartpage*
    Hero-like stage on top and a main column below.

*daisydefault*
    Single main column - the standard layout used for most pages.

*daisyfooter*
    Main column plus three footer columns.

*daisysidebar*
    Main column plus a sidebar.

*daisycomponentreference*
    Showcase layout used by the bundled component reference page.

Each layout carries a wireframe icon so editors can tell the layouts apart in the page module.

.. _content-elements:

Content elements
================

The wizard group “daisyUI elements” contains fourteen styled elements:

============ ==========
Element      CType
============ ==========
Accordion    daisy_accordion
Alert        daisy_alert
Button       daisy_button
Card         daisy_card
Card grid    daisy_cardgrid
Carousel     daisy_carousel
Chat         daisy_chat
Countdown    daisy_countdown
Hero         daisy_hero
Mockup       daisy_mockup
Stats        daisy_stats
Steps        daisy_steps
Tabs         daisy_tabs
Timeline     daisy_timeline
============ ==========

List-based elements (accordion, card grid, chat, stats, steps, tabs, timeline) store their entries in separate IRRE child tables (inline relational records). Every element comes with a backend content preview.

.. _navigation:

Navigation
==========

A breadcrumb trail renders below the navbar on every page more than one level deep; the start page shows no breadcrumb. It is built from the page rootline in ``Configuration/Sets/ThemeDaisy/setup.typoscript`` and rendered by the ``Navigation/Breadcrumbs`` Fluid component. The current page is shown as plain text; its ancestors are links.

.. _rte:

Rich text editing
=================

A slim CKEditor 5 preset ``daisy_default`` is registered in ``ext_localconf.php`` and activated by the site set. H1 is deliberately omitted (the page already provides the page-level heading); tables are supported. The editor stylesheet ``Resources/Public/Css/rte.css`` is built from the same Tailwind/daisyUI sources as the front end and follows the visitor's colour scheme.

.. _assets:

Asset build
===========

Both stylesheets are compiled with the Tailwind CLI from ``Resources/Private/Assets/Css/``:

.. code-block:: sh

   cd packages/theme_daisy
   npm install
   npm run build

``npm run build`` produces the minified ``main.css`` (all 35 daisyUI themes) and ``rte.css``. Dynamic class names used by the Fluid components are safelisted in ``main.css`` - keep the theme list in ``Resources/Private/Assets/Css/main.css``, ``Configuration/Sets/ThemeDaisy/settings.definitions.yaml`` and ``Resources/Private/Components/Actions/ThemeSwitcher.fluid.html`` in sync when adding themes.

.. _slimming-themes:

Slimming the theme catalogue
----------------------------

The extension ships with all 35 daisyUI themes compiled into ``main.css`` so
the theme switcher works out of the box. That costs less than it sounds: the
per-theme variable blocks make up roughly 37 KB of the ~263 KB stylesheet
(about 5 KB compressed) - the bulk of the file is component CSS and Tailwind
utilities, which no theme list touches. Trimming is therefore an optional
optimisation for projects that want a smaller file or a reduced palette.

Three lists define the catalogue and must move together:

1. ``Resources/Private/Assets/Css/main.css`` - the ``@plugin "daisyui"``
   themes block decides what is compiled into CSS.
2. ``Configuration/Sets/ThemeDaisy/settings.definitions.yaml`` - the
   ``theme.daisy.defaultTheme`` enum (a default outside the compiled set
   would break the site settings form).
3. ``Resources/Private/Components/Actions/ThemeSwitcher.fluid.html`` - the
   fallback menu list; entries without a compiled theme block render with
   the default theme's variables.

Example rebuild with four themes:

.. code-block:: sh

   # 1. main.css - keep the default/prefers-dark pair, then your choice
   #    themes: light --default, dark --prefersdark, cupcake, dracula;
   # 2. settings.definitions.yaml - reduce the enum to the same values
   #    (light must stay, it is the labelled fallback for unknown values);
   # 3. ThemeSwitcher.fluid.html - mirror the same names in the list.
   cd packages/theme_daisy
   npm run build
   ddev typo3 cache:flush

If you do not want the switcher in the navbar at all, override the
``Components/Navigation/Navbar.fluid.html`` template from your sitepackage
instead of editing the theme - the component chain (navbar → switcher)
stays updatable then.

.. _license:

License
=======

GPL-2.0-or-later. See the ``LICENSE.txt`` distributed with the package.

*Index · :ref:`Introduction <introduction>`*