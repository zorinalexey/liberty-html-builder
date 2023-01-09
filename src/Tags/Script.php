<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Async;
use \Liberty\HtmlBuilder\Attributes\Defer;
use \Liberty\HtmlBuilder\Attributes\Language;
use \Liberty\HtmlBuilder\Attributes\Src;
use \Liberty\HtmlBuilder\Attributes\Type;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс A
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Script extends AbstractTag
{

    use Async,
        Defer,
        Language,
        Src,
        Type;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('script');
    }

}
