<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Noresize
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Noresize
{

    protected ?string $noresize = null;

    /**
     * Пользователь может изменить размер фрейма с помощью курсора мыши,
     * активировав его на границе и перетаскивая в нужную сторону.
     * Причем не имеет значения, видна граница или нет. Добавление атрибута
     * noresize запрещает эту возможность, и пользователь уже не может изменить
     * размеры фреймов самостоятельно.
     * @param bool $noresize true - запрещает изменение размера фрейма
     * @return self
     */
    public function noresize(bool $noresize): self
    {
        if ($noresize) {
            $this->noresize = 'noresize';
        }
        return $noresize;
    }

}
