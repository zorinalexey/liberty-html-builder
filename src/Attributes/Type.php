<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт Type
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Type
{

    use Enums;

    protected ?string $type = null;

    /**
     * Указывает MIME-тип документа, на который ведёт ссылка.
     * @param string $type Раcширение документа
     * @return self
     */
    public function type(string $type): self
    {
        $this->type = $this->setEnums('FileExtensions', $type);
        return $this;
    }

}
