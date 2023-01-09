<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Lang
{

    use Enums;

    protected ?string $lang = null;

    /**
     * Браузер использует значение параметра для правильного отображения некоторых национальных символов.
     * @param string $lang  Наименование языка или его код
     * @return self
     */
    public function lang(string $lang): self
    {
        $this->lang = $this->setEnums('LangCodes', $lang);
        return $this;
    }

}
