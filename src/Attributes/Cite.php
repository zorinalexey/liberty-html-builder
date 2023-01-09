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
trait Cite
{

    protected ?string $cite = null;

    /**
     * Адрес, который указывает на источник.
     * @param string $url Адрес, который указывает на источник.
     * @return self
     */
    public function cite(string $url): self
    {
        $this->cite = $url;
        return $this;
    }

}
