<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder;

use \Liberty\HtmlBuilder\Blocks\Head;
use \Liberty\HtmlBuilder\Blocks\Body;
use \Liberty\HtmlBuilder\Attributes\Manifest;
use \Liberty\HtmlBuilder\Attributes\Lang;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс HTMLv5
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class HTMLv5 extends AbstractTag
{

    use Attributes,
        Lang,
        Manifest;

    private ?Head $head = null;
    private ?Body $body = null;

    public function head(): Head
    {
        if ( ! $this->head) {
            $this->head = Head::instance($this);
        }
        return $this->head;
    }

    public function body(): Body
    {
        if ( ! $this->body) {
            $this->body = Body::instance($this);
        }
        return $this->body;
    }

    public function __toString()
    {
        $str = '<!DOCTYPE><html';
        $str .= $this->setTagAttrubutes($this);
        $str .= '>';
        $str .= (string)$this->head;
        $str .= (string)$this->body;
        $str .= '</html>';
        return $str;
    }

}
