<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Lang
{
    use Enums;

    /**
     * Указывает основной язык содержимого элемента
     * @param string $language
     * @return $this
     */
    public function lang(string $language): self
    {
        $this->attributes['lang'] = $this->enums('Lang', $language);
        return $this;
    }
}