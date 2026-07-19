<?php

/*
 * FBSFB — Gridiron Crimson theme layer for Flarum 2.
 *
 * Builds on ernestdefoe/bespoke: the "gridiron" Bespoke preset owns the crimson
 * palette (all four color schemes, hand-picked high-contrast variants) and
 * Bespoke's editor retunes it live. This extension contributes only what a
 * token compiler can't express — normalized tag icons (uniform sizing for the
 * custom fa-kit team logos) plus a little polish. CSS-only: no routes, models,
 * or JS.
 */

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),

    new Extend\Locales(__DIR__.'/resources/locale'),
];
