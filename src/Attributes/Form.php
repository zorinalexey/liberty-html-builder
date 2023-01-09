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
trait Form
{

    protected ?string $form = null;

    /**
     * Связывает элемент с формой по её идентификатору.
     * Такая связь необходима в случае, когда элемент не располагается внутри
     * <form>, например, при создании программно.
     * @param string $formId Идентификатор формы (значение атрибута id тега <form>).
     * @return self
     */
    public function form(string $formId): self
    {
        $this->form = $formId;
        return $this;
    }

}
