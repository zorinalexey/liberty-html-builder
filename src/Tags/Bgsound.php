<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Src;
use \Liberty\HtmlBuilder\Attributes\Loop;
use \Liberty\HtmlBuilder\Attributes\Balance;
use \Liberty\HtmlBuilder\Attributes\Volume;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс Audio
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Tags
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Bgsound extends AbstractTag
{

    use Src,
        Loop,
        Volume,
        Balance;

    public function __toString()
    {
        $this->stringify('bgsound', false);
    }

}
