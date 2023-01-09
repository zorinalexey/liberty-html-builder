<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks\Universal;

use \Liberty\HtmlBuilder\Tags\A;
use \Liberty\HtmlBuilder\Tags\Abbr;
use \Liberty\HtmlBuilder\Tags\Acronym;
use \Liberty\HtmlBuilder\Tags\Address;
use \Liberty\HtmlBuilder\Tags\Applet;
use \Liberty\HtmlBuilder\Tags\Audio;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait A
{

    /**
     *  Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок.
     * В зависимости от присутствия атрибутов name или href тег <a> устанавливает ссылку или якорь.
     * Якорем называется закладка внутри страницы, которую можно указать в качестве цели ссылки.
     * При использовании ссылки, которая указывает на якорь, происходит переход к закладке внутри веб-страницы.
     *
     * Для создания ссылки необходимо сообщить браузеру, что является ссылкой,
     * а также указать адрес документа, на который следует сделать ссылку.
     * В качестве значения атрибута href используется адрес документа
     * (URL, Universal Resource Locator, универсальный указатель ресурсов),
     * на который происходит переход. Адрес ссылки может быть абсолютным и относительным.
     * Абсолютные адреса работают везде и всюду независимо от имени сайта или веб-страницы,
     * где прописана ссылка. Относительные ссылки, как следует из их названия,
     * построены относительно текущего документа или корня сайта.
     * @param string|null $url
     * @param string|null|AbstractTag $content
     * @return A
     */
    public function a(?string $url = null, string|null|AbstractTag $content = null): A
    {
        $a = new A($url, $content);
        $this->setContent[] = $a;
        return $a;
    }

    /**
     *  Тег <abbr> указывает, что последовательность символов является аббревиатурой.
     * С помощью атрибута title дается расшифровка сокращения, что позволяет понимать
     * аббревиатуру тем людям, которые с ней не знакомы. Кроме того, поисковые системы
     * индексируют полнотекстовый вариант сокращения, что может использоваться
     * для повышения рейтинга документа.
     *
     * Браузеры никак не выделяют текст внутри <abbr>, за исключением
     * Opera до версии 15, которая добавляет к тексту пунктирное подчёркивание.
     * @param string|null|AbstractTag $content
     * @return Abbr
     */
    public function abbr(string|null|AbstractTag $content = null): Abbr
    {
        $abbr = new Abbr($content);
        $this->setContent[] = $abbr;
        return $abbr;
    }

    /**
     * Тег <acronym> указывает на то, что текст является акронимом.
     * В отличие от аббревиатуры, акроним — это устоявшееся сокращение,
     * которое применяется как самостоятельное слово. К акронимам, например,
     * можно отнести следующие слова: СПИД, ликбез, замполит, США, DOS и др.
     *
     * По умолчанию, текст заключенный в контейнере <acronym> подчеркивается пунктирной линией.
     * @param string|null|AbstractTag $content
     * @return Acronym
     */
    public function acronym(string|null|AbstractTag $content = null): Acronym
    {
        $acronym = new Acronym($content);
        $this->setContent[] = $acronym;
        return $acronym;
    }

    /**
     * Тег <address> предназначен для хранения информации об авторе и может
     * включать в себя любые элементы HTML вроде ссылок, текста, выделений и т.д.
     * Планируется, что поисковые системы будут анализировать содержимое этого
     * тега для сбора информации об авторах сайтов.
     *
     * По умолчанию текст внутри контейнера <address> отображается курсивным
     * начертанием. Если эта особенность не требуется, используйте стили
     * для изменения начертания шрифта.
     * @param string|null|AbstractTag $content
     * @return Address
     */
    public function address(string|null|AbstractTag $content = null): Address
    {
        $address = new Address($content);
        $this->setContent[] = $address;
        return $address;
    }

    /**
     * Тег <applet> предназначен для вставки на страницу апплетов — небольших программ,
     * написанных на языке Java. Этот тег является устаревшим, взамен необходимо
     * использовать более гибкий тег <object>. Между открывающим и закрывающим
     * тегом можно добавить текст, который будет отображаться в браузере,
     * если он не поддерживает апплеты. В противном случае текст не выводится.
     * @param string|null|AbstractTag $content
     * @return Applet
     */
    public function applet(string|null|AbstractTag $content = null): Applet
    {
        $applet = new Applet($content);
        $this->setContent[] = $applet;
        return $applet;
    }

    /**
     * Добавляет, воспроизводит и управляет настройками аудиозаписи на веб-странице.
     * Путь к файлу задается через атрибут src или вложенный тег <source>.
     * Внутри контейнера <audio> можно написать текст, который будет выводиться
     * в браузерах, не работающих с этим тегом.
     * @param string|null|AbstractTag $content текст, который будет выводиться в браузерах, не работающих с этим тегом.
     * @return Audio
     */
    public function audio(string|null|AbstractTag $content = null): Audio
    {
        $audio = new Audio($content);
        $this->setContent[] = $audio;
        return $audio;
    }

}
