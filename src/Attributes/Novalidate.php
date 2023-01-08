<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Novalidate
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Novalidate
{

    protected ?string $novalidate = null;

    /**
     * Отменяет встроенную проверку данных введенных пользователем в форме на корректность.
     * Такая проверка осуществляется браузером автоматически при отправке формы на
     * сервер и происходит для полей <input type="email">, <input type="url">,
     * а также при наличии атрибута pattern или required.
     * @param bool $novalidate true - отключить проверку
     * @return self
     */
    public function novalidate(bool $novalidate): self
    {
        if ($novalidate) {
            $this->novalidate = 'novalidate';
        }
        return $this;
    }

}
