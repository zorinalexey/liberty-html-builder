<?php

declare(strict_types = 1);

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Blocks\Universal AS Blocks;

/**
 * Класс A
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Footer extends AbstractTag
{

    use Blocks;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->content($content);
    }

    public function __toString()
    {
        return $this->stringify('footer');
    }

}