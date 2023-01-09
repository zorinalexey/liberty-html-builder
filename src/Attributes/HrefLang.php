<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт HrefLang
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait HrefLang
{

    use Enums;

    protected ?string $hreflang = null;

    /**
     * Идентифицирует язык текста по ссылке.
     * @param string $lang
     * @return self
     */
    public function hreflang(string $lang): self
    {
        $this->hreflang = $this->setEnums('LangCodes', $lang);
        return $this;
    }

}
