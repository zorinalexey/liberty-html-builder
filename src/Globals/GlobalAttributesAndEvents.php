<?php

namespace Liberty\HtmlBuilder\Globals;

trait GlobalAttributesAndEvents
{
    use GlobalAttributes, GlobalEvents;

    /**
     * Добавить тегу новый произвольный атрибут
     * @param string $attrName
     * @param $attrValue
     * @return $this
     */
    public function addAttrubute(string $attrName, $attrValue): self
    {
        $this->attributes[$attrName] = $attrValue;
        return $this;
    }
}