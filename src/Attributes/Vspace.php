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
trait Vspace
{

    protected ?int $vspace = null;

    /**
     * Вертикальный отступ от апплета до окружающего контента.
     * @param int $vspace Любое целое положительное число
     * @return self
     */
    public function vspace(int $vspace = 150): self
    {
        $this->vspace = $vspace;
        return $this;
    }

}
