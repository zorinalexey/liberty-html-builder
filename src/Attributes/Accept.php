<?php

namespace Liberty\HtmlBuilder\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Accept
{

    use Enums;

    /**
     * Атрибут Accept указывает типы файлов, которые принимает сервер (которые могут быть отправлены через загрузку файлов).
     * Атрибут Accept может использоваться только с <input type="file">.
     * Не используйте этот атрибут в качестве средства проверки. Загрузка файлов должна быть проверена на сервере.
     * @param string $type
     * @return $this
     */
    public function accept(string $type): self
    {
        $this->attribute['accept'] = $this->enums('FileExtensions', $type);
        return $this;
    }
}