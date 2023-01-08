<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Radiogroup
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Radiogroup
{

    protected ?string $radiogroup = null;

    /**
     * Задает имя группы переключателей. Доступно только если type установлен как radio. 
     * @param string $radiogroup
     * @return self
     */
    public function radiogroup(string $radiogroup): self
    {
        $this->radiogroup = $radiogroup;
        return $this;
    }

}
