<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт hspace
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Hspace
{

    protected ?int $hspace = null;

    /**
     * Горизонтальный отступ от апплета до окружающего контента.
     * @param int $hspace Любое целое положительное число
     * @return self
     */
    public function hspace(int $hspace = 150): self
    {
        $this->hspace = $hspace;
        return $this;
    }

}
