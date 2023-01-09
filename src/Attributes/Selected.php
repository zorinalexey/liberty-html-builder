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
trait Selected
{

    protected ?string $selected = null;

    /**
     * Делает текущий пункт списка выделенным.
     * Если у тега <select> добавлен атрибут multiple, то можно выделять более одного пункта.
     * @param bool $selected
     * @return self
     */
    public function selected(bool $selected): self
    {
        if ($selected) {
            $this->selected = 'selected';
        }
        return $this;
    }

}
