<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Hspace
{
    /**
     * Атрибут / параметр hspace (от англ. "horizontal space" ‒ «горизонтальное пространство») устанавливает отступы по
     * бокам апплета.
     * Значение рассчитывается в пикселях.
     * @param int $size В качестве значения указывается любое положительное число.
     * @return $this
     */
    public function hspace(int $size): self
    {
        if ($size > 0) {
            $this->attributes['hspace'] = $size;
        }
        return $this;
    }
}