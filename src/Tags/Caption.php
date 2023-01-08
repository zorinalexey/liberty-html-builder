<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Align;
use \Liberty\HtmlBuilder\Attributes\Valign;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
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
final class Caption extends AbstractTag
{

    use Align,
        Valign,
        Attributes,
        Events;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->content($content);
    }

    public function __toString()
    {
        return $this->stringify('caption');
    }

}
