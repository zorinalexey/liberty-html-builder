<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Cite
{
    /**
     * Указывает URL-адрес, объясняющий quote/deleted/inserted text
     * @param string $url URl адрес
     * @return $this
     */
    public function cite(string $url): self
    {
        $this->attributes['cite'] = $url;
        return $this;
    }
}