<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Autofocus
{
    /**
     * Атрибут autofocus является логическим атрибутом.
     * Когда он присутствует, он указывает, что элемент должен автоматически получать фокус при загрузке страницы.
     * @param bool $autofocus
     * @return $this
     */
    public function autofocus(bool $autofocus = true): self
    {
        $this->attributes['autofocus'] = $autofocus;
        return $this;
    }
}