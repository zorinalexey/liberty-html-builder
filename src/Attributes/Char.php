<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Char
{

    protected ?string $char = null;

    /**
     * Атрибут char заставляет выравниваться содержимое колонки по заданному символу.
     * Эта возможность может пригодиться для выравнивания колонки чисел по точке.
     * Работает только в том случае, если значение атрибута align установлено как char.
     * @param string $char В качестве значения указывается один символ,
     * по которому будет происходить выравнивание.
     * @return self
     */
    public function char(string $char): self
    {
        $this->char = substr($char, 0, 1);
        return $this;
    }

}
