<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Open
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Open
{

    protected ?string $open = null;

    /**
     * Показывает информацию внутри тега.
     * @param bool $open true - показать
     * @return self
     */
    public function open(bool $open): self
    {
        if ($open) {
            $this->open = 'open';
        }
        return $this;
    }

}
