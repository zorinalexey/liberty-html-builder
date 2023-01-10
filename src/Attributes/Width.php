<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Width
{
    /**
     * Атрибут / параметр width (от англ. "width" ‒ «ширина») устанавливает начальную ширину области отображени,
     * без учёта каких-либо простых или диалоговых окон, которые может вывести апплет.
     * Значение рассчитывается в пикселях.
     * @param int $width В качестве значения указывается любое положительное число.
     * @return $this
     */
    public function width(int $width): self
    {
        if ($width > 0) {
            $this->attributes['width'] = $width;
        }
        return $this;
    }

}