<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Border
{
    /**
     * Не поддерживается в HTML 5.
     * Задает ширину границы элемента. Вместо этого используйте CSS
     * @param int|null $width
     * @return $this
     */
    public function border(int $width = null): self
    {
        if ($width >= 0) {
            $this->attributes['border'] = $width;
        }
        return $this;
    }
}