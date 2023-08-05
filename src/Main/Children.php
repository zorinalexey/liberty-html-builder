<?php

namespace Liberty\HtmlBuilder\Main;

trait Children
{
    /**
     * Получить потомков
     * @param string|null $tagName
     * @return false|array|AbstractElement
     * @noinspection MethodVisibilityInspection
     * @noinspection MethodShouldBeFinalInspection
     */
    protected function children(string|null $tagName = null): false|array|AbstractElement
    {
        if (!$tagName) {
            return $this->children;
        }
        
        return $this->children[$tagName] ?? false;
    }
}