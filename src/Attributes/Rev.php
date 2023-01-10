<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Rev
{
    /**
     * Не поддерживается в HTML5.
     * Указывает связь между связанным документом и текущим документом
     * @param string $text text
     * @return $this
     */
    public function rev(string $text): self
    {
        $this->attributes['rev'] = $text;
        return $this;
    }
}