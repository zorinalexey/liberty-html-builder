<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Style
{

    protected ?string $style = null;

    /**
     * Применяется для определения стиля элемента с помощью правил CSS.
     * @param string $name Имя стилевого свойства
     * @param string $value Значение стилевого свойства
     * @return self
     */
    public function style(string $name, string $value): self
    {
        $this->style .= $name . ': ' . $value . ';';
        return $this;
    }

}
