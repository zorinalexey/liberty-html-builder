<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Alt;
use \Liberty\HtmlBuilder\Attributes\Code;
use \Liberty\HtmlBuilder\Attributes\Align;
use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Width;
use \Liberty\HtmlBuilder\Attributes\Height;
use \Liberty\HtmlBuilder\Attributes\Hspace;
use \Liberty\HtmlBuilder\Attributes\Vspace;
use \Liberty\HtmlBuilder\Attributes\Archive;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Events\Event;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Applet extends AbstractTag
{

    use Alt,
        Attributes,
        Code,
        Align,
        Width,
        Event,
        Height,
        Hspace,
        Vspace,
        Archive;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('applet');
    }

}
