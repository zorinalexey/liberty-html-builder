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
trait Formnovalidate
{

    protected ?string $formnovalidate = null;

    /**
     * Отменяет встроенную проверку данных введенных пользователем в форме на
     * корректность при нажатии на кнопку. Такая проверка делается браузером
     * автоматически при отправке формы на сервер для полей <input type="email">,
     * <input type="url">, а также при наличии атрибута pattern или required у тега <input>.
     * @param bool $noValidate true - проверка отключена
     * @return self
     */
    public function formnovalidate(bool $noValidate): self
    {
        if ($noValidate) {
            $this->formnovalidate = 'formnovalidate';
        }
        return $this;
    }

}
