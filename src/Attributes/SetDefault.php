<?php

namespace Liberty\HtmlBuilder\Attributes;

trait SetDefault
{
    /**
     * Атрибут default является логическим атрибутом.
     * При наличии, он указывает, что дорожка должна быть включена, если предпочтения пользователя не указывают,
     * что другой трек будет более подходящим.
     * Не должно быть более одного элемента Track с атрибутом default для каждого элемента мультимедиа.
     * @param bool $default
     * @return $this
     */
    public function default(bool $default = true): self
    {
        if ($default) {
            $this->attributes['default'] = 'true';
        }
        return $this;
    }
}