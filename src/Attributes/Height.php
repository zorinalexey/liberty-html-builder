<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Height
{
    /**
     * Атрибут / параметр height (от англ. "height" ‒ «высота») устанавливает начальную высоту области отображения,
     * без учёта каких-либо простых или диалоговых окон, которые может вывести апплет.
     * Значение рассчитывается в пикселях.
     * @param int $height В качестве значения указывается любое положительное число.
     * @return $this
     */
    public function height(int $height): self
    {
        if ($height > 0) {
            $this->attributes['height'] = $height;
        }
        return $this;
    }
}