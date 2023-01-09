<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Border;
use \Liberty\HtmlBuilder\Attributes\Bordercolor;
use \Liberty\HtmlBuilder\Attributes\Frameborder;
use \Liberty\HtmlBuilder\Attributes\Framespacing;
use \Liberty\HtmlBuilder\Attributes\Rows;
use \Liberty\HtmlBuilder\Attributes\Cols;

/**
 * Класс Source
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Tags
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Frameset extends AbstractTag
{

    use Border,
        Cols,
        Rows,
        Bordercolor,
        Frameborder,
        Framespacing;

    public function __toString()
    {
        return $this->stringify('frameset');
    }

    /**
     * Тег <frame> определяет свойства отдельного фрейма, на которые делится окно
     * браузера. Этот элемент должен располагаться в контейнере <frameset>,
     * который к тому же задает способ разметки страницы на отдельные области.
     * В каждую из таких областей загружается самостоятельная веб-страница
     * определяемая с помощью атрибута src. Хотя обязательных атрибутов у тега
     * <frame> и нет, рекомендуется задавать каждому фрейму его имя через
     * атрибут name. Это особенно важно, если требуется по ссылке из одного
     * фрейма загружать документ в другой.
     * @return Frame
     */
    public function frame(): Frame
    {
        $frame = new Frame();
        $this->content[] = $frame;
        return $frame;
    }

}
