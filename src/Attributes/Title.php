<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Title
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Title
{

    protected ?string $title = null;

    /**
     * Добавляет всплывающую подсказку к тексту ссылки.
     * @param string $title
     * @return self
     */
    public function title(string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
