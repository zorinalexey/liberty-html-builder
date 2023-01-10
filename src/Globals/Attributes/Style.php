<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Style
{
    /**
     * При помощи свойств CSS задаёт стиль элемента
     * @param string $styleName наименование свойства CSS
     * @param string $value значение
     * @return $this
     */
    public function style(string $styleName, string $value): self
    {
        $style = $styleName . ': ' . $value;
        if (!isset($this->attributes['style'])) {
            $this->attributes['style'] = $style;
        } else {
            $this->attributes['style'] .= '; ' . trim($style, ';');
        }
        return $this;
    }
}