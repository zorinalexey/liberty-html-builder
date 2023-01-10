<?php

namespace Liberty\HtmlBuilder\Attributes;

trait ObjectAttr
{
    /**
     * Задаёт имя файла. Используется вместо параметра «code».
     * @param string $filename
     * @return $this
     */
    public function object(string $filename): self
    {
        $this->attributes['object'] = $filename;
        return $this;
    }
}