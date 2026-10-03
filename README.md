# FBSFB — Gridiron Crimson Theme

The college-football look that runs on [fbsfb.com](https://fbsfb.com): a
crimson brand, a near-black to crimson hero header and warm neutrals, in light,
dark and high-contrast. Built on
[Bespoke](https://github.com/ernestdefoe/bespoke) for [Flarum 2](https://flarum.org).

![The FBSFB tags page in the Gridiron Crimson look, with each tag as a coloured tile under its cover image](screenshots/tags.png)

The tag cover images above come from [Tag Covers](https://github.com/ernestdefoe/tag-covers);
the colours and the crimson chrome are this theme with Bespoke.

- **The palette is Bespoke's `gridiron` preset.** All four colour schemes, with hand-picked high-contrast variants. Pick it in Admin → Bespoke, or make it the default preset, then retune it live in Bespoke's editor.
- **Even tag icons.** Custom `fa-kit` team logos render at their native shape, so wide wordmarks (`fa-*-wordmark`, `*-text-logo`) spill past the tag-icon box. This theme holds every tag icon to the same square in tag labels, the tag list, the `/tags` page and the sidebar's Popular Tags widget.
- **Popular Tags that fit.** In the widget, long tag names stay on one line and end in an ellipsis instead of running under the icon.
- **A wider sidebar.** On screens 768px and up the index sidebar is 260px, so conference names fit on one line.

## Settings

The theme has no settings of its own. Colours are set and tuned in
Admin → Bespoke, under the **Gridiron** preset.

## Good to know

- **CSS only.** No JavaScript, routes or database changes, and no build step.
- **Safe without Bespoke's tokens.** Every colour reads Bespoke's variables with the Gridiron values as fallbacks, so the theme still renders sensibly if a token is missing.
- **Requires** [`ernestdefoe/bespoke`](https://github.com/ernestdefoe/bespoke), which Composer installs with it.

## Installation

```bash
composer require ernestdefoe/fbsfb-theme
php flarum cache:clear
```

Then enable **FBSFB — Gridiron Crimson Theme** and **Bespoke** in the admin
panel, and select the **Gridiron** preset in Admin → Bespoke.

## Updating

```bash
composer update ernestdefoe/fbsfb-theme
php flarum cache:clear
```

## Licence

MIT.
