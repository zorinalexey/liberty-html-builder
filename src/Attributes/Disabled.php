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
trait Disabled
{

    protected ?string $disabled = null;

    /**
     * Блокирует доступ и изменение элемента. Кроме того, такой элемент не может
     * получить фокус путем нажатия на клавишу Tab, мышью или другим способом.
     * Тем не менее, такое состояние элемента можно изменять через скрипты.
     * Значение блокированного элемента формы не передается на сервер.
     * @param bool $disabled
     * @return self
     */
    public function disabled(bool $disabled): self
    {
        if ($disabled) {
            $this->disabled = 'disabled';
        }
        return $this;
    }

}
