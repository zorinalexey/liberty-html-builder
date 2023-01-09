<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт Rel
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Rel
{

    use Enums;

    protected mixed $rel = null;

    /**
     * Отношения между ссылаемым и текущим документами.
     * @param string $rel
     * @return self
     */
    public function rel(string $rel): self
    {
        $this->rel = $this->setEnums('Rel', $rel);
        return $this;
    }

}
