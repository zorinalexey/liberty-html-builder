<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks;

use \Liberty\HtmlBuilder\Tags\A;
use \Liberty\HtmlBuilder\Tags\B;
use \Liberty\HtmlBuilder\Tags\Abbr;
use \Liberty\HtmlBuilder\Tags\Acronym;
use \Liberty\HtmlBuilder\Tags\Address;
use \Liberty\HtmlBuilder\Tags\Applet;
use \Liberty\HtmlBuilder\Tags\Audio;
use \Liberty\HtmlBuilder\Tags\Basefont;
use \Liberty\HtmlBuilder\Tags\Bdi;
use \Liberty\HtmlBuilder\Tags\Bdo;
use \Liberty\HtmlBuilder\Tags\Big;
use \Liberty\HtmlBuilder\Tags\Blink;
use \Liberty\HtmlBuilder\Tags\Blockquote;
use \Liberty\HtmlBuilder\Tags\Br;

/**
 * Трейт Universal
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Blocks
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Universal
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

    /**
     * Устанавливает жирное начертание шрифта.
     * Допустимо использовать этот тег совместно с другими тегами,
     * которые определяют начертание текста.
     * @param string|AbstractTag $content
     * @return B
     */
    public function b(string|AbstractTag $content): B
    {
        $b = new B($content);
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
     * Тег <br> устанавливает перевод строки в том месте, где этот тег находится.
     * В отличие от тега абзаца <p>, использование тега <br> не добавляет пустой
     * отступ перед строкой. Если текст, в котором используется перевод строки,
     * обтекает плавающий элемент, то с помощью атрибута clear тега <br>
     * можно сделать так, чтобы следующая строка начиналась ниже элемента.
     * @param string|AbstractTag $content
     * @return Br
     */
    public function br(): Br
    {
        $br = new Br();
        $this->setContent[] = $br;
        return $br;
    }

}
