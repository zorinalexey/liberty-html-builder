<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

/**
 * Класс AbstractTag
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
abstract class AbstractTag
{

    protected mixed $content = null;

    /**
     * Задать контент тега
     * @param string|null $content
     * @return self
     */
    protected function content(string|null|AbstractTag $content = null): self
    {
        if ( ! $this->content) {
            $this->content = $content;
        } else {
            $this->content .= $content;
        }
        return $this;
    }

    protected ?string $str = null;
    private static array $ignogeAttrubutes = [
        'open'
    ];

    protected function stringify(string $tag, bool $close = true): string
    {
        $this->str = '<' . $tag;
        $this->str .= $this->setTagAttrubutes($this);
        $this->str .= ">";
        if ($close) {
            if ($this->content) {
                if (is_string($this->content)) {
                    $this->str .= $this->content;
                } else {
                    foreach ($this->content as $item) {
                        $this->str .= (string)$item;
                    }
                }
            }
            $this->str .= '</' . $tag . '>';
        }
        return $this->str;
    }

    protected function setTagAttrubutes(string|AbstractTag $attributes): string
    {
        $str = '';
        foreach ($attributes as $key => $value) {
            if ($value !== null && $key !== 'content' && $key !== 'str') {
                $str .= ' ' . $key;
                if ($key !== $value OR in_array($key, self::$ignogeAttrubutes)) {
                    $str .= '="';
                    if ($value === true) {
                        $str .= 'true';
                    } elseif ($value === false) {
                        $str .= 'false';
                    } else {
                        $str .= (string)$value;
                    }
                    $str .= '"';
                }
            }
        }
        return $str;
    }

    abstract public function __toString();
}
