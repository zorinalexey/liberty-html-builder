<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Alink
{
    /**
     * Атрибут / параметр alink (от англ. "activated link" ‒ «активированная ссылка») задаёт цвет текста для
     * активируемых ссылок документа.
     * @param string $color В качестве значения указывается допустимое значение цвета.
     * @return $this
     */
    public function alink(string $color): self
    {
        $this->attributes['alink'] = $color;
        return $this;
    }
}