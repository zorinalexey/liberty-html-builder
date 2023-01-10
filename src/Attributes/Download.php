<?php

namespace Liberty\HtmlBuilder\Attributes;

/**
 *
 */
trait Download
{


    /**
     * Указывает, что целевой объект будет загружен, когда пользователь щелкнет гиперссылку
     * @param string $filename filename
     * @return $this
     */
    public function download(bool|string $filename): self
    {
        $this->attributes['download'] = $filename;
        return $this;
    }
}