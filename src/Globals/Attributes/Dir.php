<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Dir
{
    /**
     * Атрибут dir задает направление текста для содержимого элемента.
     * @param string $dir
     * @return $this
     */
    public function dir(string $dir = 'ltr'): self
    {
        $value = strtolower($dir);
        if ($value !== 'rtl') {
            $this->attributes['dir'] = 'ltr';
        } else {
            $this->attributes['dir'] = 'rtl';
        }
        return $this;
    }
}