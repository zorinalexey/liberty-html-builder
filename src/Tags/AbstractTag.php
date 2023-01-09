<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
abstract class AbstractTag
{

    protected mixed $setContent = null;

    /**
     * Задать контент тега
     * @param string|null $setContent
     * @return self
     */
    protected function setContent(string|null|AbstractTag $setContent = null): self
    {
        if ( ! $this->setContent) {
            $this->setContent = $setContent;
        } else {
            $this->setContent .= $setContent;
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
            if ($this->setContent) {
                if (is_string($this->setContent)) {
                    $this->str .= $this->setContent;
                } else {
                    foreach ($this->setContent as $item) {
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
            if ($value !== null && $key !== 'setContent' && $key !== 'str') {
                $str .= ' ' . $key;
                if ($key !== $value OR in_array($key, self::$ignogeAttrubutes)) {
                    $str .= '="';
                    if ($value === true) {
                        $str .= 'true';
                    } elseif ($value === false) {
                        $str .= 'false';
                    } else {
                        $str .= str_replace('"', "\'", (string)$value);
                    }
                    $str .= '"';
                }
            }
        }
        return $str;
    }

    abstract public function __toString();
}
