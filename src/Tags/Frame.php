<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Bordercolor;
use \Liberty\HtmlBuilder\Attributes\Frameborder;
use \Liberty\HtmlBuilder\Attributes\Src;
use \Liberty\HtmlBuilder\Attributes\Noresize;
use \Liberty\HtmlBuilder\Attributes\Name;
use \Liberty\HtmlBuilder\Attributes\Scrolling;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Frame extends AbstractTag
{

    use Bordercolor,
        Frameborder,
        Name,
        Noresize,
        Scrolling,
        Src;

    public function __toString()
    {
        return $this->stringify('frame');
    }

}
