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
trait Enctype
{

    use Enums;

    protected ?string $enctype = null;

    /**
     * Определяет способ кодирования данных формы при их отправке на сервер.
     * Обычно устанавливать значение атрибута enctype не требуется,
     * данные вполне правильно понимаются на стороне сервера.
     * Однако если используется поле для отправки файла (input type="file"),
     * следует определить атрибут enctype как multipart/form-data.
     * @param string $enctype application/x-www-form-urlencoded - Вместо
     * пробелов ставится +, символы вроде русских букв кодируются их шестнадцатеричными
     * значениями (например, %D0%9F%D0%B5%D1%82%D1%8F вместо Петя).
     * multipart/form-data - Данные не кодируются. Это значение применяется при отправке файлов.
     * text/plain - Пробелы заменяются знаком +, буквы и другие символы не кодируются.
     * file - аналогично multipart/form-data
     * text - аналогично application/x-www-form-urlencoded
     * none - аналогично text/plain
     * @return self
     */
    public function enctype(string $enctype): self
    {
        $this->enctype = $this->setEnums('Enctype', $enctype);
        return $this;
    }

}
