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
trait Checked
{

    protected ?string $checked = null;

    /**
     * Активирует команду. Доступно только если type установлен как radio или checkbox.
     * @param string $checked true - активно (Выбрано)
     * @return self
     */
    public function checked(bool $checked): self
    {
        if ($checked) {
            $this->checked = 'checked';
        }
        return $this;
    }

}
