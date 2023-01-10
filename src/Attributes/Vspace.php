<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Vspace
{
    /**
     * Атрибут / параметр vspace (от англ. "vertical space" ‒ «вертикальное пространство»)
     * устанавливает отступы сверху и снизу апплета.
     * Значение рассчитывается в пикселях.
     * @param int $size В качестве значения указывается любое положительное число.
     * @return $this
     */
    public function vspace(int $size): self
    {
        if ($size > 0) {
            $this->attributes['vspace'] = $size;
        }
        return $this;
    }
}