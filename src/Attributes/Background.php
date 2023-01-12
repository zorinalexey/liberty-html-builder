<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Background
{
    /**
     * Атрибут / параметр background (от англ. "background" ‒ «фон, задний план») указывает изображение,
     * используемое в качестве фона страницы.
     * Если размеры фонового изображения заданного таким способом оказываются меньше размеров страницы, то такое
     * изображение, как правило, дублируется до тех пор пока изображения-дубликаты не заполнят весь фон страницы.
     * @param string $url В качестве значения указывается URL-адрес изображения.
     * @return $this
     */
    public function background(string $url): self
    {
        $this->attributes['background'] = $url;
        return $this;
    }
}