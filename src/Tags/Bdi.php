<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

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
final class Bdi extends AbstractTag
{

    use Tags,
        Events;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('bdi');
    }

}
