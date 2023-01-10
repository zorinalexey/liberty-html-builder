<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Tabindex
{

    /**
     * Глобальный атрибут / параметр tabindex (от англ. "tab index" ‒ «указатель закладок») устанавливает порядок
     * перехода между некоторыми элементами (a, button, input и другие), осуществляемый при помощи клавиши «Tab».
     * @param int $tabindex
     * @return $this
     */
    public function tabindex(int $tabindex): self
    {
        $this->attributes['tabindex'] = $tabindex;
        return $this;
    }
}