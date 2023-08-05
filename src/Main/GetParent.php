<?php

namespace Liberty\HtmlBuilder\Main;

trait GetParent
{
    /**
     * Получить родительский элемент
     * @return AbstractElement
     */
    public function parent(): AbstractElement
    {
        if ($this->parent) {
            return $this->parent;
        }

        return $this;
    }
}
