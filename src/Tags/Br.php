<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Clear;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс Br
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Tags
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Br extends AbstractTag
{

    use Clear;

    public function __toString()
    {
        $str = '<br';
        $str .= $this->setTagAttrubutes($this);
        $str .= '/>';
        return $str;
    }

}
