<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Checked
{
    /**
     * Указывает, что <input> элемент должен быть предварительно выбран при загрузке страницы
     * (Для type="checkbox" или type="radio")
     * @param bool $checked
     * @return $this
     */
    public function checked(bool $checked = true): self
    {
        if ($checked) {
            $this->attributes['checked'] = $checked;
        }
        return $this;
    }
}