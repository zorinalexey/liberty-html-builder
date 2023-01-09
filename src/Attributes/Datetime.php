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
trait Datetime
{

    protected ?string $datetime = null;

    public function datetime(int|string $date): self
    {
        if (is_int($date)) {
            $this->datetime = date('Y-m-dTH:i', $date);
        } else {
            $this->datetime = date('Y-m-dTH:i', strtotime($date));
        }
        return $this;
    }

}
