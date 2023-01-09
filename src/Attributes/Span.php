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
trait Span
{

    protected ?int $span = null;

    /**
     * Определяет число колонок, к которым будут применяться заданные характеристики.
     * Если этот атрибут отсутствует, то тег <col> работает для одной колонки.
     * Допускается применять атрибут span к нескольким колонкам и таким образом
     * формировать группы колонок с одинаковыми характеристиками.
     * @param int $char Целое положительное значение.
     * @return self
     */
    public function charoff(int $char): self
    {
        $this->span = $char;
        return $this;
    }

}
