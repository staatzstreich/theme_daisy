# theme_daisy – daisyUI theme for TYPO3

A TYPO3 v14 theme package built on [daisyUI 5](https://daisyui.com) and Tailwind CSS v4, providing Fluid components, fourteen styled content elements and five backend layouts.

## Requirements

- TYPO3 14.3 or later
- PHP 8.3+

## Installation

1. Install the extension (e.g. via `composer req michaelstaatz/theme-daisy` in your distribution).
2. Include the **ThemeDaisy** site set in your site configuration (`config/system/sites/main/config.yaml`):

   ```yaml
   dependencies:
     - michaelstaatz/theme-daisy
   ```

3. Flush caches. The theme comes with sensible defaults and works out of the box.

## Configuration

One site setting controls the appearance:

| Setting | Default | Description |
| ------- | ------- | ----------- |
| `theme.daisy.defaultTheme` | `light` | One of the 35 built-in daisyUI themes, set as the `data-theme` attribute on `<html>`. |

Visitors can switch the theme client-side via the theme switcher in the navbar; the choice is stored in the browser and takes precedence over the server default.

## Backend layouts

Five page layouts are registered and selectable per page:

- **daisystartpage** – stage and main column
- **daisydefault** – single main column
- **daisyfooter** – main plus three footer columns
- **daisysidebar** – main plus sidebar
- **daisycomponentreference** – showcase layout for the component reference

Each layout renders a matching Fluid page template named after its identifier and shows a wireframe icon in the backend layout selector.

## Content elements

Fourteen content elements in the wizard group “daisyUI elements”:

alert, button, card, card grid, carousel, chat, countdown, hero, mockup, stats, steps, tabs, timeline, accordion.

All elements come with a backend content preview, which is fully translated through XLF language files, so editors see a thumbnail in the page module.

## Navigation

A breadcrumb trail renders below the navbar on every page more than one level deep; the start page shows no breadcrumb. It is built from the page rootline in `Configuration/Sets/ThemeDaisy/setup.typoscript` and rendered by the `Navigation/Breadcrumbs` Fluid component.

## Rich text editing

A slim CKEditor 5 preset (`daisy_default`) is registered and activated by the site set. Its `rte.css` is built with the same Tailwind/daisyUI toolchain and reacts to the visitor's colour scheme.

## Asset build

The front-end CSS (`main.css`, `rte.css`) is compiled from `Resources/Private/Assets/Css/`. From the extension root:

```sh
npm install
npm run build      # builds main.css and rte.css, minified
npm run watch:main # watches during development
```

All 35 built-in daisyUI themes are compiled into `main.css`; the source lists are kept in sync with `settings.definitions.yaml` and the theme switcher component. Projects that want fewer themes or a smaller stylesheet can trim the catalogue down to a handful of themes – the "Slimming the theme catalogue" section in the documentation walks through the three files involved and the rebuild.

## License

GPL-2.0-or-later. See `LICENSE.txt`.
