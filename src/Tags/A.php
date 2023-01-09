<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Rel;
use \Liberty\HtmlBuilder\Attributes\Rev;
use \Liberty\HtmlBuilder\Attributes\Href;
use \Liberty\HtmlBuilder\Attributes\Type;
use \Liberty\HtmlBuilder\Attributes\Name;
use \Liberty\HtmlBuilder\Attributes\Shape;
use \Liberty\HtmlBuilder\Attributes\Coords;
use \Liberty\HtmlBuilder\Attributes\Target;
use \Liberty\HtmlBuilder\Attributes\HrefLang;
use \Liberty\HtmlBuilder\Attributes\Download;
use \Liberty\HtmlBuilder\Attributes\Universal AS Tags;
use \Liberty\HtmlBuilder\Events\Universal AS Events;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс A
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class A extends AbstractTag
{

    use Tags,
        Events,
        Download,
        HrefLang,
        Target,
        Coords,
        Shape,
        Href,
        Type,
        Name,
        Rel,
        Rev;

    public function __construct(?string $url = null, string|null|AbstractTag $content = null)
    {
        $this->href($url);
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('a');
    }

}
