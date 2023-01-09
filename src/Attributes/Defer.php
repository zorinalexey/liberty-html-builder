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
trait Defer
{

    protected ?string $defer = null;

    /**
     * Атрибут defer откладывает выполнение скрипта до тех пор, пока вся
     * страница не будет загружена полностью.
     * @param bool $defer true - отложить выполнение скрипта
     * @return self
     */
    public function defer(bool $defer): self
    {
        if ($defer) {
            $this->defer = 'defer';
        }
        return $this;
    }

}
