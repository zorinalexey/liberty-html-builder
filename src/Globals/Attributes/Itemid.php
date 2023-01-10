<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Itemid
{
    /**
     * Указывает глобальный идентификатор для элемента микроданных
     * @param string $id
     * @return $this
     */
    public function itemid(string $id): self
    {
        $this->attributes['itemid'] = $id;
        return $this;
    }
}