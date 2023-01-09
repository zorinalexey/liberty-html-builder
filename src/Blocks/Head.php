<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks;

use \Liberty\HtmlBuilder\Tags\Base;
use \Liberty\HtmlBuilder\Tags\Link;
use \Liberty\HtmlBuilder\Tags\Meta;
use \Liberty\HtmlBuilder\Tags\Script;
use \Liberty\HtmlBuilder\Tags\Basefont;
use \Liberty\HtmlBuilder\Blocks\AbstractBlocks;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Head extends AbstractBlocks
{

    /**
     *  Элемент <base> определен внутри контейнера <head> и инструктирует браузер
     * относительно полного базового адреса текущего документа. Тег <base> предназначен
     * для документов, в которых используется относительный адрес и эти документы могут
     * переноситься в другую папку или даже на другой компьютер без потери связи.
     * Браузер ищет тег <base>, определяет полный адрес документа и корректно загружает его.
     * Например, если адрес документа указан как <base href="http://www.megasite.ru/hzchd/">,
     * то при добавлении рисунков достаточно использовать относительный адрес <img src="images/labuda.gif">.
     * При этом полный путь к изображению будет http://www.megasite.ru/hzchd/images/labuda.gif,
     * что позволяет браузеру всегда находить графический файл, независимо от того, где находится
     * текущая веб-страница. Также можно применять и иерархическую систему пути с двумя точками.
     * Так, если изображение добавляется как <img src="../images/labuda.gif">, то полный путь к файлу
     * будет http://www.megasite.ru/images/labuda.gif.
     * Второе применение тега <base> — задание целевого окна для всех ссылок на текущей странице.
     * @param string $type href - Адрес, который должен использоваться для указания полного пути к файлам.
     * target - Имя окна или фрейма, куда будет загружаться документ, открываемый по ссылке.
     * @param string $content текст
     * @return Base
     */
    public function base(string $type, string $content): Base
    {
        $base = new Base($type, $content);
        $this->setContent[] = $base;
        return $base;
    }

    /**
     * Тег <basefont> предназначен для задания шрифта, размера и цвета текста по
     * умолчанию. Указанные значения будут использоваться во всем документе за
     * исключением тега <font>, в котором можно переопределить параметры оформления
     * текста. Допускается использование тега в контейнере <head> или <body>, причем
     * несколько раз. Это позволяет изменять вид шрифта для части документа.
     * @return Basefont
     */
    public function basefont(): Basefont
    {
        $basefont = new Basefont();
        $this->setContent[] = $basefont;
        return $basefont;
    }

    /**
     * Устанавливает связь с внешним документом вроде файла со стилями или со шрифтами.
     * @return Link
     */
    public function link(): Link
    {
        $link = new Link();
        $this->setContent[] = $link;
        return $link;
    }

    /**
     * <meta> определяет метатеги, которые используются для хранения информации
     * предназначенной для браузеров и поисковых систем. Например, механизмы поисковых
     * систем обращаются к метатегам для получения описания сайта, ключевых слов и других данных.
     * Разрешается использовать более чем один метатег, все они размещаются в контейнере <head>.
     * Как правило, атрибуты любого метатега сводятся к парам «имя=значение», которые определяются
     * ключевыми словами content, name или http-equiv.
     * @return Meta
     */
    public function meta(): Meta
    {
        $meta = new Meta();
        $this->setContent[] = $meta;
        return $meta;
    }

    /**
     *  Тег <script> предназначен для описания скриптов, может содержать ссылку на
     * программу или ее текст на определенном языке. Скрипты могут располагаться
     * во внешнем файле и связываться с любым HTML-документом. Такой подход позволяет
     * использовать одни и те же общие функции на многих веб-страницах и ускоряет их
     * загрузку, т.к. внешний файл кэшируется при первой загрузке, и скрипт вызывается
     * быстрее при последующих вызовах.
     *
     * <script> может располагаться в заголовке или теле HTML-документа в
     * неограниченном количестве. В большинстве случаев местоположение скрипта
     * никак не сказывается на работу программы. Однако скрипты, которые должны
     * выполняться в первую очередь, обычно помещают в заголовок документа.
     * @param string|null|AbstractTag $content
     * @return Script
     */
    public function script(string|null|AbstractTag $content = null): Script
    {
        $script = new Script($content);
        $this->setContent[] = $script;
        return $script;
    }

    /**
     * Тег <style> применяется для определения стилей элементов веб-страницы.
     * Тег <style> необходимо использовать внутри контейнера <head>.
     * Можно задавать более чем один тег <style>.
     * @param string|AbstractTag $content Текстовая строка
     * @return Style
     */
    public function style(string|AbstractTag $content): Style
    {
        $style = new Style($content);
        $this->setContent[] = $style;
        return $style;
    }

    /**
     * Определяет заголовок документа.
     * Элемент <title> не является частью документа и не показывается напрямую на веб-странице.
     * В операционной системе Windows текст заголовка отображается в левом верхнем углу окна браузера.
     * Допускается использовать только один тег <title> на документ и размещать его в контейнере <head>.
     * @param string|AbstractTag $content
     * @return Title
     */
    public function title(string|AbstractTag $content = null): Title
    {
        if ( ! isset($this->content['title'])) {
            $title = new Title($content);
            $this->content['title'] = $title;
        }
        return $this->content['title'];
    }

    public function __toString()
    {
        return $this->stringify('head');
    }

}
