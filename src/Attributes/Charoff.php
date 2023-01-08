<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Char
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Charoff
{

    protected ?int $charoff = null;

    /**
     * Если атрибут align установлен как char, а для атрибута char в качестве
     * значения задан символ, то с помощью атрибута charoff можно смещать
     * содержимое ячейки влево или вправо относительно заданного символа.
     * Так, charoff="3" означает, что браузер должен сместить содержимое ячейки
     * на три символа вправо, а charoff="-3" — сместить на три символа влево.
     * @param int $char Любое целое положительное или отрицательное число.
     * @return self
     */
    public function charoff(int $char): self
    {
        $this->charoff = $char;
        return $this;
    }

}
