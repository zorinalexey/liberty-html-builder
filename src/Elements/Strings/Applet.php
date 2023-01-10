<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Attributes\Align;
use Liberty\HtmlBuilder\Attributes\Alt;
use Liberty\HtmlBuilder\Attributes\Archive;
use Liberty\HtmlBuilder\Attributes\Code;
use Liberty\HtmlBuilder\Attributes\Codebase;
use Liberty\HtmlBuilder\Attributes\Height;
use Liberty\HtmlBuilder\Attributes\Hspace;
use Liberty\HtmlBuilder\Attributes\Mayscript;
use Liberty\HtmlBuilder\Attributes\Name;
use Liberty\HtmlBuilder\Attributes\ObjectAttr;
use Liberty\HtmlBuilder\Attributes\Vspace;
use Liberty\HtmlBuilder\Attributes\Width;
use Liberty\HtmlBuilder\Globals\Attributes\Accesskey;
use Liberty\HtmlBuilder\Globals\Attributes\Contenteditable;
use Liberty\HtmlBuilder\Globals\Attributes\Contextmenu;
use Liberty\HtmlBuilder\Globals\Attributes\Dir;
use Liberty\HtmlBuilder\Globals\Attributes\Draggable;
use Liberty\HtmlBuilder\Globals\Attributes\Dropzone;
use Liberty\HtmlBuilder\Globals\Attributes\Hidden;
use Liberty\HtmlBuilder\Globals\Attributes\Id;
use Liberty\HtmlBuilder\Globals\Attributes\Inert;
use Liberty\HtmlBuilder\Globals\Attributes\Lang;
use Liberty\HtmlBuilder\Globals\Attributes\SetClass;
use Liberty\HtmlBuilder\Globals\Attributes\Spellcheck;
use Liberty\HtmlBuilder\Globals\Attributes\Style;
use Liberty\HtmlBuilder\Globals\Attributes\Tabindex;
use Liberty\HtmlBuilder\Globals\Attributes\Title;
use Liberty\HtmlBuilder\Globals\Attributes\Translate;
use Liberty\HtmlBuilder\Globals\Attributes\XmlLang;
use Liberty\HtmlBuilder\Globals\GlobalEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;

class Applet extends AbstractElement
{
    use Align, Alt, Archive, Code, Codebase, Height, Hspace, Mayscript, Name, ObjectAttr, Vspace, Width, Accesskey,
        SetClass, Contenteditable, Contextmenu, Dir, Draggable, Dropzone, Hidden, Id, Inert, Lang, Spellcheck,
        Style, Tabindex, Title, Translate, XmlLang;

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->stringify('applet');
    }
}