<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Inert
{
    /**
     * Глобальный атрибут / параметр inert (от англ. "inert" ‒ «инертный, неактивный») указывает web-браузеру,
     * что данный элемент, в том числе и все его дочерние элементы, являются инертными.
     * @param bool $inert
     * @return $this
     */
    public function inert(bool $inert = true): self
    {
        if ($inert) {
            $this->attributes['inert'] = true;
        }
        return $this;
    }
}