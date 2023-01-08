<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Height
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Height
{

    protected ?string $height = null;

    /**
     * Высота апплета.
     * @param int $height Любое целое положительное число
     * @param bool $percent true - Использовать % иначе использовать пиксели
     * @return self
     */
    public function height(int $height = 150, bool $percent = false): self
    {
        $this->height = (string)$height;
        if ($percent) {
            $this->height .= '%';
        }
        return $this;
    }

}
