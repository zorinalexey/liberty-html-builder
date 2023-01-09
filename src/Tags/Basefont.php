<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Color;
use \Liberty\HtmlBuilder\Attributes\Face;
use \Liberty\HtmlBuilder\Attributes\Size;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Basefont extends AbstractTag
{

    use Color,
        Face,
        Size;

    public function __toString()
    {
        return $this->stringify('basefont', false);
    }

}
