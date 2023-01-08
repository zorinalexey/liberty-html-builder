<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Rev
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Rev
{

    protected ?string $rev = null;

    /**
     * Отношения между текущим и ссылаемым документами.
     * @param string $rev
     * @return self
     */
    public function rev(string $rev): self
    {
        $this->rev = $rev;
        return $this;
    }

}
