<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks\Universal;

use \Liberty\HtmlBuilder\Tags\B AS b;
use \Liberty\HtmlBuilder\Tags\Basefont;
use \Liberty\HtmlBuilder\Tags\Bdi;
use \Liberty\HtmlBuilder\Tags\Bdo;
use \Liberty\HtmlBuilder\Tags\Big;
use \Liberty\HtmlBuilder\Tags\Blink;
use \Liberty\HtmlBuilder\Tags\Blockquote;
use \Liberty\HtmlBuilder\Tags\Br;
use \Liberty\HtmlBuilder\Tags\Button;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait B
{

    /**
     * Устанавливает жирное начертание шрифта.
     * Допустимо использовать этот тег совместно с другими тегами,
     * которые определяют начертание текста.
     * @param string|AbstractTag $content
     * @return B
     */
    public function b(string|AbstractTag $content): b
    {
        $b = new b($content);
        $this->setContent[] = $b;
        return $b;
    }

    /**
     * Тег <basefont> предназначен для задания шрифта, размера и цвета текста по умолчанию.
     * Указанные значения будут использоваться во всем документе за исключением тега <font>,
     * в котором можно переопределить параметры оформления текста. Допускается использование
     * тега в контейнере <head> или <body>, причем несколько раз.
     * Это позволяет изменять вид шрифта для части документа.
     * @param string|AbstractTag $content
     * @return Basefont
     */
    public function basefont(string|AbstractTag $content): Basefont
    {
        $basefont = new Basefont($content);
        $this->setContent[] = $basefont;
        return $basefont;
    }

    /**
     * Элемент <bdi> указывает фрагмент текста, который должен быть изолирован от
     * изменения направления вывода текста. Такое поведение важно для текстов,
     * одновременно содержащих разные языки, читающихся слева направо и справа налево.
     * @param string|AbstractTag $content
     * @return Bdi
     */
    public function bdi(string|AbstractTag $content): Bdi
    {
        $bdi = new Bdi($content);
        $this->setContent[] = $bdi;
        return $bdi;
    }

    /**
     * Тег <bdo> устанавливает направление вывода текста и преимущественно предназначен
     * для использования с языками, где чтение происходит справа налево. Например,
     * к ним относится арабский язык.
     * @param string|AbstractTag $content
     * @return Bdo
     */
    public function bdo(string|AbstractTag $content): Bdo
    {
        $bdo = new Bdo($content);
        $this->setContent[] = $bdo;
        return $bdo;
    }

    /**
     *  Тег <big> увеличивает размер шрифта на единицу по сравнению с обычным текстом.
     * В HTML размер шрифта измеряется в условных единицах от 1 до 7, средний размер текста,
     * используемый по умолчанию, принят 3. Таким образом, добавление тега <big> увеличивает
     * текст на одну условную единицу. Допускается применение вложенных тегов <big>,
     * при этом размер шрифта будет больше с каждым уровнем.
     *
     * На размер шрифта влияет не только заданный атрибут size тега <font>, но и
     * выбор гарнитуры шрифта. Шрифт Arial выглядит крупнее, чем шрифт Times, а шрифт
     * Verdana чуть больше шрифта Arial. Учитывайте эту особенность при выборе шрифта
     * и его размеров. Для более точного управления размером текста используйте стили.
     * @param string|AbstractTag $content
     * @return Big
     */
    public function big(string|AbstractTag $content): Big
    {
        $big = new Big($content);
        $this->setContent[] = $big;
        return $big;
    }

    /**
     * Устанавливает мигание текста.
     * @param string|AbstractTag $content
     * @return Blink
     */
    public function blink(string|AbstractTag $content): Blink
    {
        $big = new Blink($content);
        $this->setContent[] = $big;
        return $big;
    }

    /**
     * Тег <blockquote> предназначен для выделения длинных цитат внутри документа.
     * Текст, обозначенный этим тегом, традиционно отображается как выровненный
     * блок с отступами слева и справа (примерно по 40 пикселов), а также с отбивкой сверху и снизу.
     * @param string|AbstractTag $content
     * @return Blockquote
     */
    public function blockquote(string|AbstractTag $content): Blockquote
    {
        $big = new Blockquote($content);
        $this->setContent[] = $big;
        return $big;
    }

    /**
     *  Тег <button> создает на веб-странице кнопки и по своему действию напоминает
     * результат, получаемый с помощью тега <input> (с атрибутом type="button | reset | submit").
     * В отличие от этого тега, <button> предлагает расширенные возможности по созданию кнопок.
     * Например, на подобной кнопке можно размещать любые элементы HTML, в том числе изображения.
     * Используя стили можно определить вид кнопки путем изменения шрифта, цвета фона, размеров и
     * других параметров.
     *
     * Теоретически, тег <button> должен располагаться внутри формы, устанавливаемой элементом <form>.
     * Тем не менее, браузеры не выводят сообщение об ошибке и корректно работают с тегом <button>, если
     * он встречается самостоятельно. Однако, если необходимо результат нажатия на кнопку отправить на сервер,
     * помещать <button> в контейнер <form> обязательно.
     * @param string|AbstractTag $content
     * @return Button
     */
    public function button(string|AbstractTag $content): Button
    {
        $button = new Button($content);
        $this->setContent[] = $button;
        return $button;
    }

}
