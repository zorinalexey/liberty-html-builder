<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Bgcolor
{
    /**
     * Не поддерживается в HTML 5.
     * Задает цвет фона элемента. Вместо этого используйте CSS
     * @param string $color
     * @return $this
     */
    public function bgcolor(string $color): self
    {
        $this->attributes['bgcolor'] = $color;
        return $this;
    }
}