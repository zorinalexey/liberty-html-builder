<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Itemtype
{
    /**
     * Устанавливает ссылку на источник
     * @param string $url
     * @return $this
     */
    public function itemtype(string $url): self
    {
        $this->attributes['itemtype'] = $url;
        return $this;
    }

}
