<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Href
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Href
{

    protected $href = null;

    /**
     * Задает адрес документа, на который следует перейти.
     * @param string $url
     * @return self
     */
    public function href(string $url): self
    {
        $this->href = $url;
        return $this;
    }

}
