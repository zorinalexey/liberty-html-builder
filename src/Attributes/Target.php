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
trait Target
{

    use Enums;

    protected ?string $target = null;

    /**
     * Имя окна или фрейма, куда браузер будет загружать документ.
     * @param string $target
     * @return self
     */
    public function target(string $target): self
    {
        $this->target = $this->setEnums('Target', $target);
        return $this;
    }

}
