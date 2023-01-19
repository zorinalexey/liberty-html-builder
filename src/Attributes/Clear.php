<?php

namespace Liberty\HtmlBuilder\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Clear
{
    use Enums;

    /**
     * Атрибут clear сообщает браузеру, как обрабатывать следующую строку, если текст обтекает
     * плавающий элемент. Плавающим элементом называется изображение,
     * у которого установлен атрибут align или элемент, к которому применяется стилевое свойство float.
     * Результат использования clear зависит от края, по которому выравнивается элемент и значения
     * clear. Так, если изображение выравнивается по левому краю, а значение атрибута clear тега <br>
     * установлено как all или left, то текст после тега <br> будет отображаться ниже рисунка.
     * Любые другие значения clear заставят текст располагаться справа от изображения и обтекать его.
     * @param string $clear
     * @return $this
     */
    public function clear(string $clear): self
    {
        $this->attributes['clear'] = $this->enums('Clear', $clear);
        return $this;
    }
}