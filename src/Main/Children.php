<?php

namespace Liberty\HtmlBuilder\Main;

trait Children
{
    /**
     * Получить потомков
     * @param string|null $tagName
     * @return array|false
     */
    protected function children(string|null $tagName = null): false|array|AbstractElement
    {
        if (!$tagName) {
            return $this->children;
        }
        if (isset($this->children[$tagName])) {
            return $this->children[$tagName];
        }
        return false;
    }
}