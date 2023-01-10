<?php

namespace Liberty\HtmlBuilder\Globals;

use Liberty\HtmlBuilder\Globals\Events\Onafterprint;
use Liberty\HtmlBuilder\Globals\Events\Onbeforeprint;
use Liberty\HtmlBuilder\Globals\Events\Onbeforeunload;
use Liberty\HtmlBuilder\Globals\Events\Onerror;
use Liberty\HtmlBuilder\Globals\Events\Onhashchange;
use Liberty\HtmlBuilder\Globals\Events\Onload;
use Liberty\HtmlBuilder\Globals\Events\Onmessage;
use Liberty\HtmlBuilder\Globals\Events\Onoffline;
use Liberty\HtmlBuilder\Globals\Events\Ononline;
use Liberty\HtmlBuilder\Globals\Events\Onpagehide;
use Liberty\HtmlBuilder\Globals\Events\Onpageshow;
use Liberty\HtmlBuilder\Globals\Events\Onpopstate;
use Liberty\HtmlBuilder\Globals\Events\Onresize;
use Liberty\HtmlBuilder\Globals\Events\Onstorage;
use Liberty\HtmlBuilder\Globals\Events\Onunload;

trait WindowEvents
{
    use Onafterprint, Onbeforeprint, Onbeforeunload, Onerror, Onhashchange, Onload, Onmessage,
        Onoffline, Ononline, Onpagehide, Onpageshow, Onpopstate, Onresize, Onstorage, Onunload;
}