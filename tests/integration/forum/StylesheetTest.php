<?php

namespace ErnestDefoe\FbsfbTheme\Tests\integration\forum;

use Flarum\Foundation\Paths;
use Flarum\Testing\integration\TestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * The theme is one LESS file: it must compile into the forum stylesheet (a
 * LESS error takes the whole page down), on top of Bespoke.
 */
class StylesheetTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->extension('ernestdefoe-bespoke', 'ernestdefoe-fbsfb-theme');
    }

    #[Test]
    public function the_forum_renders_with_the_theme_compiled_in()
    {
        $css = $this->app()->getContainer()->make(Paths::class)->public.'/assets/forum.css';
        @unlink($css);

        $this->assertSame(200, $this->send($this->request('GET', '/'))->getStatusCode());

        $compiled = (string) @file_get_contents($css);
        $this->assertStringContainsString('--fbsfb-crimson:var(--bespoke-color-brand,#9e1b32)', str_replace(' ', '', $compiled));
        $this->assertStringContainsString('svg.TagIcon.svg-inline--fa', $compiled);
    }
}
