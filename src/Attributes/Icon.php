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
trait Icon
{

    protected ?string $icon = null;

    /**
     * Адрес картинки
     * @param string $url
     * @return self
     */
    public function icon(string $url): self
    {
        $this->icon = $url;
        return $this;
    }

}
