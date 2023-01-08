<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Enums;
use \Liberty\HtmlBuilder\Attributes\Disabled;
use \Liberty\HtmlBuilder\Attributes\Checked;
use \Liberty\HtmlBuilder\Attributes\Radiogroup;
use \Liberty\HtmlBuilder\Attributes\Label;

/**
 * Класс A
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Command extends AbstractTag
{

    use Enums,
        Label,
        Disabled,
        Radiogroup,
        Checked;

    private ?string $type = null;

    public function __toString()
    {
        return $this->stringify('command');
    }

    public function type(string $type): self
    {
        $this->type = $this->setEnums('', $type);
        if ($this->type !== 'checkbox' AND $this->type !== 'command' AND $this->type !== 'radio') {
            $this->type = null;
        }
        return $this;
    }

}
