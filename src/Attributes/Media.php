<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Media
{
    /**
     * Указывает, какие носители/устройства оптимизированы для связанного документа
     * @param string $media media_query
     * @return $this
     */
    public function media(string $media): self
    {
        $this->attributes['media'] = $media;
        return $this;
    }
}