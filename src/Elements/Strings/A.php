<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Attributes\Charset;
use Liberty\HtmlBuilder\Attributes\Coords;
use Liberty\HtmlBuilder\Attributes\Download;
use Liberty\HtmlBuilder\Attributes\Href;
use Liberty\HtmlBuilder\Attributes\Hreflang;
use Liberty\HtmlBuilder\Attributes\Media;
use Liberty\HtmlBuilder\Attributes\Name;
use Liberty\HtmlBuilder\Attributes\Ping;
use Liberty\HtmlBuilder\Attributes\Rel;
use Liberty\HtmlBuilder\Attributes\Rev;
use Liberty\HtmlBuilder\Attributes\Shape;
use Liberty\HtmlBuilder\Elements\StringElements;
use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\AddText;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class A extends AbstractElement
{
    use Charset, Coords, Download, Href, AddText, Media, Hreflang,
        Name, Ping, Rev, Rel, Shape, GlobalAttributesAndEvents;

    use Children, GetParent, StringElements, AddText;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'a';
    }
}