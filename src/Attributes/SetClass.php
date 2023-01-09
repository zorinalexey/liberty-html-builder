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
trait SetClass
{

    protected ?string $class = null;

    /**
     * Определяет имя класса, которое позволяет связать тег со стилевым оформлением.
     * @param string $class
     * @return self
     */
    public function class(string $class): self
    {
        if ( ! $this->class) {
            $this->class .= $class;
        } else {
            $this->class .= ', ' . $class;
        }
        return $this;
    }

}
