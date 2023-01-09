<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Clear
{

    use Enums;

    protected ?string $clear = null;

    /**
     * Атрибут clear сообщает браузеру, как обрабатывать следующую строку, если
     * текст обтекает плавающий элемент. Плавающим элементом называется изображение,
     * у которого установлен атрибут align или элемент, к которому применяется стилевое свойство float.
     *
     * Результат использования clear зависит от края, по которому выравнивается элемент и значения clear.
     * Так, если изображение выравнивается по левому краю, а значение атрибута clear
     * тега  установлено как all или left, то текст после тега будет отображаться ниже рисунка.
     * Любые другие значения clear заставят текст располагаться справа от изображения и обтекать его.
     * @param string $clear
     * @return self
     */
    public function clear(string $clear): self
    {
        $this->clear = $this->setEnums('Clear', $clear);
        return $this;
    }

}
