<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Async
{
    /**
     * @param bool $async
     * @return $this
     */
    public function async(bool $async = true): self
    {
        $this->attributes['async'] = $async;
        return $this;
    }
}