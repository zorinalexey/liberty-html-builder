<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Autofocus
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Autofocus
{

    protected ?string $autofocus = null;

    /**
     * Атрибут autofocus устанавливает, что элемент получает фокус после загрузки страницы.
     * @param bool $autofocus true - установить автофокус
     * @return self
     */
    public function autofocus(bool $autofocus): self
    {
        if ($autofocus) {
            $this->autofocus = 'autofocus';
        }
        return $this;
    }

}
