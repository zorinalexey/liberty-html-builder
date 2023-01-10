<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Contenteditable
{
    /**
     * Указывает, является ли содержимое элемента редактируемым или нет
     * @param bool $contenteditable
     * @return $this
     */
    public function contenteditable(bool $contenteditable = true): self
    {
        if ($contenteditable) {
            $this->attributes['contenteditable'] = 'true';
        }
        return $this;
    }
}