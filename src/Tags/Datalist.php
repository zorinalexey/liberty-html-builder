<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Id;
use \Liberty\HtmlBuilder\Tags\Option;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Datalist extends AbstractTag
{

    use Id;

    public function __toString()
    {
        return $this->stringify('datalist');
    }

    /**
     * Тег <option> определяет отдельные пункты списка, создаваемого с помощью
     * контейнера <select>. Ширина списка определяется самым широким текстом,
     * указанным в теге <option>, а также может изменяться с помощью стилей.
     * Если планируется отправлять данные списка на сервер, то требуется поместить
     * элемент <select> внутрь формы. Это также необходимо, когда к данным списка идет обращение через скрипты.
     * @param string|null|AbstractTag $content
     * @return Options
     */
    public function option(string|null|AbstractTag $content = null): Option
    {
        $options = new Option($content);
        $this->setContent[] = $options;
        return $options;
    }

}
