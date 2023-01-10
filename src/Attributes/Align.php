<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Align
{
    /**
     * Не поддерживается в HTML 5.
     * Задает выравнивание в соответствии с окружающими элементами. Вместо этого используйте CSS
     * @param string $align
     * @return $this
     */
    public function align(string $align): self
    {
        $this->attributes['align'] = $align;
        return $this;
    }
}