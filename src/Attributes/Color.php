<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Color
{
    /**
     * Не поддерживается в HTML 5.
     * Задает цвет текста элемента. Вместо этого используйте CSS
     * @param string $color
     * @return $this
     */
    public function color(string $color): self
    {
        $this->attributes['color'] = $color;
        return $this;
    }
}