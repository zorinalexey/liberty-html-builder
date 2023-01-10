<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Dirname
{
    /**
     * Атрибут dirname позволяет отправку текстового направления ввода field/textarea
     * @param string $dir Значением атрибута dirname всегда является имя поля ввода/текстовое поле, за которым следует ".dir".
     * @return $this
     */
    public function dirname(string $dir): self
    {
        $this->attributes['dirname'] = $dir;
        return $this;
    }
}