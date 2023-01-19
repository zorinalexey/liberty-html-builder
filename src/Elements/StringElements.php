<?php

namespace Liberty\HtmlBuilder\Elements;

use Liberty\HtmlBuilder\Elements\Strings\A;
use Liberty\HtmlBuilder\Elements\Strings\Abbr;
use Liberty\HtmlBuilder\Elements\Strings\Acronym;
use Liberty\HtmlBuilder\Elements\Strings\Address;
use Liberty\HtmlBuilder\Elements\Strings\Applet;
use Liberty\HtmlBuilder\Elements\Strings\Bdo;
use Liberty\HtmlBuilder\Elements\Strings\Br;
use Liberty\HtmlBuilder\Elements\Strings\Font;
use Liberty\HtmlBuilder\Elements\Strings\I;
use Liberty\HtmlBuilder\Elements\Strings\Img;

trait StringElements
{
    final public function a(): A
    {
        return $this->getTag(A::class);
    }

    final public function abbr(): Abbr
    {
        return $this->getTag(Abbr::class);
    }

    final public function acronym(): Acronym
    {
        return $this->getTag(Acronym::class);
    }

    final public function address(): Address
    {
        return $this->getTag(Address::class);
    }

    final public function applet(): Applet
    {
        return $this->getTag(Applet::class);
    }

    final public function img(): Img
    {
        return $this->getTag(Img::class);
    }

    /**
     * Устанавливает курсивное начертание шрифта.
     * Допустимо использовать этот тег совместно с другими тегами, которые определяют начертание текста.
     * @return I
     */
    final public function i(): I
    {
        return $this->getTag(I::class);
    }

    /**
     * Тег <font> представляет собой контейнер для изменения характеристик шрифта,
     * таких как размер, цвет и гарнитура. Хотя этот тег до сих пор поддерживается всеми браузерами,
     * он считается устаревшим и от его использования рекомендуется отказаться в пользу стилей.
     * @return Font
     */
    final public function font(): Font
    {
        return $this->getTag(Font::class);
    }

    final public function br(): Br
    {
        return $this->getTag(Br::class);
    }

    final public function bdo(): Bdo
    {
        return $this->getTag(Bdo::class);
    }
}