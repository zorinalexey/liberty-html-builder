<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Events\Event;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Dl extends AbstractTag
{

    use Attributes,
        Event;

    public function __toString()
    {
        return $this->stringify('dl');
    }

    /**
     * Тег <dd> входит в тройку элементов <dl>, <dt>, <dd>, предназначенных для
     * создания списка определений. Каждый такой список начинается с контейнера <dl>,
     * куда входит тег <dt> создающий термин и тег <dd> задающий определение этого термина.
     * Закрывающий тег </dd> не обязателен, поскольку следующий тег сообщает о завершении
     * предыдущего элемента. Тем не менее, хорошим стилем является закрывать все теги.
     * @param string|null|AbstractTag $content
     * @return Dd
     */
    public function dd(string|null|AbstractTag $content = null): Dd
    {
        $dd = new Dd($content);
        $this->setContent[] = $dd;
        return $dd;
    }

    /**
     * Тег <dt> входит в тройку элементов <dl>, <dt>, <dd>, предназначенных для
     * создания списка определений. Каждый такой список начинается с контейнера <dl>,
     * куда входит тег <dt> создающий термин и тег <dd> задающий определение этого термина.
     * Закрывающий тег </dt> не обязателен, поскольку следующий тег сообщает о завершении предыдущего элемента.
     * Тем не менее, хорошим стилем является закрывать все теги.
     * @param string|null|AbstractTag $content
     * @return Dt
     */
    public function dt(string|null|AbstractTag $content = null): Dt
    {
        $dd = new Dt($content);
        $this->setContent[] = $dd;
        return $dd;
    }

}
