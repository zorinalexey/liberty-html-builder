<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Align;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class H2 extends AbstractTag
{

    use Align;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('h2');
    }

}
