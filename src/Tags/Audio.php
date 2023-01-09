<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\A;
use \Liberty\HtmlBuilder\Attributes\Src;
use \Liberty\HtmlBuilder\Attributes\Loop;
use \Liberty\HtmlBuilder\Attributes\Muted;
use \Liberty\HtmlBuilder\Attributes\Preload;
use \Liberty\HtmlBuilder\Attributes\Controls;
use \Liberty\HtmlBuilder\Attributes\Autoplay;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Audio extends AbstractTag
{

    use Src,
        Loop,
        Muted,
        Preload,
        Controls,
        Autoplay;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->str .= '<audio';
        $this->setContent[] = $content;
    }

    public function __toString()
    {
        $this->str .= $this->setTagAttrubutes($this);
        $this->str .= '>';
        foreach ($this->content as $value) {
            $this->str .= (string)$value;
        }
        $this->str .= '</audio>';
        return $this->str;
    }

    /**
     *
     * @return Source
     */
    public function source(): Source
    {
        $source = new Source();
        $this->setContent[] = $source;
        return $source;
    }

    /**
     * В зависимости от присутствия атрибутов name или href тег <a> устанавливает ссылку или якорь.
     * @param string $url
     * @param string|null|AbstractTag $content
     * @return A
     */
    public function a(?string $url = null, string|null|AbstractTag $content = null): A
    {
        $a = new A($url, $content);
        $this->setContent[] = $a;
        return $a;
    }

}
