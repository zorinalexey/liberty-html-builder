<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Text
{
    /**
     * Атрибут / параметр text (от англ. "text" ‒ «текст») задаёт цвет текста страницы.
     * @param string $color В качестве значения указывается значение цвета.
     * @return $this
     */
    public function text(string $color): self
    {
        $this->attributes['text'] = $color;
        return $this;
    }
}