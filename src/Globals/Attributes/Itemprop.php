<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Itemprop
{

    /**
     * Указывает имена свойств элемента микроданных
     * @param string $itemprop
     * @return $this
     */
    public function itemprop(string $itemprop): self
    {
        $this->attributes['itemprop'] = $itemprop;
        return $this;
    }
}