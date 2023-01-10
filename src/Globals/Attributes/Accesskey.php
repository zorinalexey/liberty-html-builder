<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Accesskey
{
    /**
     * Атрибут accesskey указывает комбинацию клавиш для активации/фокусировки элемента.
     * @param string $accesskey
     * @return $this
     */
    public function accesskey(string $accesskey): self
    {
        $this->attributes['accesskey'] = $accesskey;
        return $this;
    }
}