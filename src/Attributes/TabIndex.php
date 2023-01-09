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
trait TabIndex
{

    protected ?int $tabindex = null;

    /**
     * Определяет последовательность перехода между ссылками при нажатии на кнопку Tab.
     * @param string $tabindex
     * @return self
     */
    public function tabindex(int $tabindex): self
    {
        $this->tabindex = $tabindex;
        return $this;
    }

}
