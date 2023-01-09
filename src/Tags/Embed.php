<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Align;
use \Liberty\HtmlBuilder\Attributes\Height;
use \Liberty\HtmlBuilder\Attributes\Hidden;
use \Liberty\HtmlBuilder\Attributes\Hspace;
use \Liberty\HtmlBuilder\Attributes\Src;
use \Liberty\HtmlBuilder\Attributes\Type;
use \Liberty\HtmlBuilder\Attributes\Vspace;
use \Liberty\HtmlBuilder\Attributes\Pluginspage;
use \Liberty\HtmlBuilder\Attributes\Width;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Embed extends AbstractTag
{

    use Width,
        Vspace,
        Type,
        Pluginspage,
        Src,
        Hspace,
        Hidden,
        Height,
        Align;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('embed');
    }

}
