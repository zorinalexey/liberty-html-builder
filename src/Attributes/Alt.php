<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Alt
{
    /**
     * Задает альтернативный текст при неудачном отображении исходного элемента
     * @param string $text
     * @return $this
     */
    public function alt(string $text): self
    {
        $this->attributes['alt'] = $text;
        return $this;
    }
}