<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт Preload
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Preload
{

    use Enums;

    protected ?string $preload = null;

    /**
     * Используется для загрузки файла вместе с загрузкой веб-страницы.
     * @param string|null $preload none - Не загружать аудиофайл.
     * metadata - Загрузить только служебную информацию (продолжительность и др.).
     * auto - Загрузить аудиофайл целиком при загрузке страницы.
     * @return self
     */
    public function preload(?string $preload = 'none'): self
    {
        $this->preload = $this->setEnums('Preload', $preload);
        return $this;
    }

}
