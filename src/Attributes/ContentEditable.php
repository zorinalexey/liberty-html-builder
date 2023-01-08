<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт ContentEditable
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait ContentEditable
{

    protected bool|null $contenteditable = null;

    /**
     * Сообщает, что элемент доступен для редактирования пользователем.
     * @param bool $value
     * @return self
     */
    public function contenteditable(bool $value): self
    {
        $this->contenteditable = $value;
        return $this;
    }

}
