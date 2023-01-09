<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Media;
use \Liberty\HtmlBuilder\Attributes\Type;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Style extends AbstractTag
{

    use Media,
        Type;

    public function __construct(string|AbstractTag $content)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('style');
    }

}
