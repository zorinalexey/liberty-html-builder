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
use Liberty\HtmlBuilder\Globals\Globals;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\Text;

class A extends AbstractElement
{
    use Charset, Coords, Download, Href, Text, Media, Hreflang, Name, Ping, Rev, Rel, Shape, Globals;

    public function __toString(): string
    {
        return $this->stringify('a');
    }
}