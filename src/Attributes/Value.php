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
trait Value
{

    protected string|int|null $value = null;

    /**
     * Определяет значение элемента, которое будет отправлено на сервер.
     * На сервер отправляется пара «имя=значение», где имя задается атрибутом
     * name тега элемента, а значение - атрибутом value.
     * Значение может, как совпадать с текстом на кнопке, так быть и самостоятельным.
     * Также атрибут value применяется для доступа к данным через скрипты.
     * @param string|int $value Любая текстовая строка или число
     * @return self
     */
    public function value(string|int $value): self
    {
        $this->value = $value;
        return $this;
    }

}
