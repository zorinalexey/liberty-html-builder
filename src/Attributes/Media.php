<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Media
{

    use Enums;

    protected ?string $media = null;

    /**
     * Определяет устройство, для которого будет воспроизводиться файл.
     * @param string $media
     * @return self
     */
    public function media(string $media = 'all'): self
    {
        $this->media = $this->setEnums('Media', $media);
        return $this;
    }

}
