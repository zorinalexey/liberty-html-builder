<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Face
{
    /**
     * Атрибут face служит для задания гарнитуры шрифтов, использующихся для текста.
     * Названий шрифтов можно привести несколько, через запятую.
     * В этом случае, если первый указанный шрифт не будет найден,
     * браузер станет использовать следующий по списку.
     * @param string $face
     * @return Face
     */
    public function face(string $face): self
    {
        if (!isset($this->attributes['ping'])) {
            $this->attributes['ping'] = $face;
        } else {
            $this->attributes['ping'] .= ', ' . $face;
        }
        return $this;

    }
}