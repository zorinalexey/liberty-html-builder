<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Link
{
    /**
     * Атрибут / параметр link (от англ. "link" ‒ «ссылка») задаёт цвет, используемый по умолчанию всеми не
     * просмотренными гиперссылками документа.
     * @param string $color В качестве значения указывается значение цвета.
     * @return $this
     */
    public function link(string $color): self
    {
        $this->attributes['link'] = $color;
        return $this;
    }
}