<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Data
{
    /**
     * Указывает URL-адрес ресурса, используемого объектом
     * @param string $url
     * @return $this
     */
    public function data(string $url): self
    {
        $this->attributes['url'] = $url;
        return $this;
    }
}