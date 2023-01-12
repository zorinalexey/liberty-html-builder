<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Vlink
{
    /**
     * Атрибут / параметр vlink (от англ. "visited link" ‒ «посещённая ссылка») задаёт цвет всем активированным
     * (посещённым) ссылкам страницы.
     * @param string $color В качестве значения указывается значение цвета.
     * @return $this
     */
    public function vlink(string $color): self
    {
        $this->attributes['vlink'] = $color;
        return $this;
    }
}