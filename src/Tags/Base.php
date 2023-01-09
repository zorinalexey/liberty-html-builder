<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Href;
use \Liberty\HtmlBuilder\Attributes\Target;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Base extends AbstractTag
{

    use Href,
        Target;

    public function __construct(string $type, string|null|AbstractTag $content = null)
    {
        if ($type === 'href') {
            $this->href($content);
        } else {
            $this->target($content);
        }
    }

    public function __toString()
    {
        return $this->stringify('base', false);
    }

}
