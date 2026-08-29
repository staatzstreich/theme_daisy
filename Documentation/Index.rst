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

Then flush the caches. The ThemeDaisy site set ships sensible TypoScript defaults, a CKEditor preset and all backend layouts - no manual TypoScript includes required.

.. _configuration:

Configuration
=============

The theme exposes a single set setting:

``theme.daisy.defaultTheme``
    The daisyUI theme stamped as ``data-theme`` on the ``<html>`` element. Any of the 35 built-in daisyUI themes (``light``, ``dark``, ``cupcake``, ``dracula``, ...). Default: ``light``.

Visitors can override the theme client-side through the navbar theme switcher; their choice is stored in the browser and takes precedence over the server-rendered default.

.. _backend-layouts:

Backend layouts
===============

Five layouts are registered under “Backend Layouts” and map 1:1 onto Fluid page templates in ``Resources/Private/Templates/Pages/``:

*daisystartpage*
    Hero-like stage on top and a main column below.

*daisydefault*
    Single main column - the workhorse layout.

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

List-based elements (accordion, card grid, chat, stats, steps, tabs, timeline) use inline relation (IRRE) child tables. Every element ships with a backend content preview.

.. _navigation:

Navigation
==========

A breadcrumb trail renders below the navbar on every page more than one level deep; the start page shows no breadcrumb. It is built from the page rootline in ``Configuration/Sets/ThemeDaisy/setup.typoscript`` and rendered by the ``Navigation/Breadcrumbs`` Fluid component. The current page is plain text, its ancestors are links.

.. _rte:

Rich text editing
=================

A slim CKEditor 5 preset ``daisy_default`` is registered in ``ext_localconf.php`` and activated by the site set. H1 is deliberately omitted (pages provide the heading level), tables are supported. The editor stylesheet ``Resources/Public/Css/rte.css`` is built from the same Tailwind/daisyUI sources as the front end and follows the visitor's colour scheme.

.. _assets:

Asset build
===========

Both stylesheets are compiled with the Tailwind CLI from ``Resources/Private/Assets/Css/``:

.. code-block:: sh

   cd packages/theme_daisy
   npm install
   npm run build

``npm run build`` produces the minified ``main.css`` (all 35 daisyUI themes) and ``rte.css``. Dynamic class names used by the Fluid components are safelisted in ``main.css`` - keep the theme list in ``Resources/Private/Assets/Css/main.css``, ``Configuration/Sets/ThemeDaisy/settings.definitions.yaml`` and ``Resources/Private/Components/Actions/ThemeSwitcher.fluid.html`` in sync when adding themes.

.. _license:

License
=======

GPL-2.0-or-later. See the ``LICENSE.txt`` distributed with the package.

*Index · :ref:`Introduction <introduction>`*