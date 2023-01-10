<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Content
{
    /**
     * Дает значение, связанное с атрибутом http-equiv или Name
     * @param string $content
     * @return $this
     */
    public function content(string $content): self
    {
        $this->attributes['content'] = $content;
        return $this;
    }
}