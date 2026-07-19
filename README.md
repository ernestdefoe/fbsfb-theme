# FBSFB — Gridiron Crimson Theme

A college-football **Gridiron Crimson** theme for [Flarum 2](https://flarum.org), built on
[`ernestdefoe/bespoke`](https://github.com/ernestdefoe/bespoke). Crimson brand, a
near-black → crimson **hero header**, warm neutrals, full light + dark (+ high-contrast)
schemes — the look that ships on [fbsfb.com](https://fbsfb.com).

## What it does

- **Palette** comes from Bespoke's `gridiron` preset (all four color schemes). Pick it in
  **Admin → Bespoke**, or set it as the default preset — then retune it live in Bespoke's
  editor.
- **Normalized tag icons.** Custom `fa-kit` team logos render as inline SVG at their native
  aspect ratio, so wide wordmarks (`fa-*-wordmark`, `*-text-logo`) otherwise blow past the
  tag-icon box. This layer forces every tag icon to a uniform square in the widget, tag
  list, labels and the `/tags` page.

CSS-only — no JS, no build step.

## Install

```bash
composer require ernestdefoe/fbsfb-theme
```

Then enable **FBSFB — Gridiron Crimson Theme** (and `ernestdefoe/bespoke`) in
Admin → Extensions, and select the **Gridiron** preset in Bespoke.

## License

MIT © ernestdefoe
