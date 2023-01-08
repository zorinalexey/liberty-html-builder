<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks;

use \Liberty\HtmlBuilder\Attributes\Alink;
use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Events\Universal AS Events;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Blocks\Universal AS Tags;

/**
 * Класс Body
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Blocks
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Body extends AbstractTag
{

    use Alink,
        Events,
        Attributes,
        Tags;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->content($content);
    }

    public function __toString()
    {
        return $this->stringify('body');
    }

}
