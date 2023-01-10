<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Itemref
{
    /**
     * Устанавливает ссылки на элементы
     * @param string $itemref
     * @return $this
     */
    public function itemref(string $itemref): self
    {
        $this->attributes['itemref'] = $itemref;
        return $this;
    }
}