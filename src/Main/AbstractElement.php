<?php /** @noinspection ALL */

namespace Liberty\HtmlBuilder\Main;

/**
 *
 * @method children(string|null $tagName)
 * @noinspection MethodShouldBeFinalInspection
 */
abstract class AbstractElement
{

    /**
     * Фарматировать вывод HTML
     * @var bool
     */
    public bool $format = true;
    /**
     * @var string
     */
    protected string $tagName;
    /**
     * @var array
     */
    protected array $content = [];
    /**
     * @var bool
     */
    protected bool $close = true;
    /**
     * @var array
     */
    protected array $attributes = [];
    /**
     * @var array
     */
    protected array $children = [];
    /**
     * @var AbstractElement|null
     */
    protected self|null $parent = null;
    /**
     * @var string
     */
    protected string $tabs = '';

    /**
     * @param AbstractElement|null $parent
     */
    public function __construct(self|null $parent = null)
    {
        if ($parent) {
            $this->parent = $parent;
            $this->format = $parent->format;
        }
    }

    /**
     * Получить потомков
     * @param string|null $tagName
     * @return false|array|AbstractElement
     */
    public function child(string|null $tagName = null): false|array|self
    {
        return $this->children($tagName);
    }

    /**
     * @return string
     */
    final public function render(): string
    {
        return (string)$this;
    }

    public function __toString(): string
    {
        return $this->stringify($this->tagName);
    }

    /**
     * @param string $tagName
     * @return string
     * @noinspection MethodVisibilityInspection
     */
    final protected function stringify(string $tagName): string
    {
        $str = $this->getTabs() . '<' . $tagName;
        $str .= $this->getAttrString();
        if ($this->close) {
            $str .= '>' . $this->getContentString();
            $str .= $this->getTabs() . '</' . $tagName . '>';
        } else {
            $str .= '/>';
        }
        return $str;
    }

    final public function getTabs(): string
    {
        if ($this->parent && $this->format) {
            return $this->parent->getTabs() . "\t";
        }
        if (!$this->parent && $this->format) {
            return "\n";
        }
        return '';
    }

    /**
     * @return string
     * @noinspection MethodVisibilityInspection
     */
    final protected function getAttrString(): string
    {
        $str = '';
        foreach ($this->attributes as $key => $value) {
            if (is_bool($value) and $value === true) {
                $str .= ' ' . strtolower($key);
            } elseif ($value !== null and !empty($value)) {
                $str .= ' ' . strtolower($key) . '="' . str_replace('"', "'", $value) . '"';
            }
        }
        return $str;
    }

    final  protected function getContentString(): string
    {
        $str = '';
        foreach ($this->content as $element) {
            if ($this->format) {
                $str .= $this->formatContent($element);
            } else {
                $str .= $element;
            }
        }
        return $str;
    }

    /** @noinspection MissingParameterTypeDeclarationInspection */
    private function formatContent($element): string
    {
        if (is_string($element)) {
            return $this->getTabs() . "\t" . str_replace(["\n", "\s"], '', $element);
        }
        return $element;
    }

    /**
     * Получить атрибуты элемента
     * @return array
     * @noinspection MethodShouldBeFinalInspection
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * Включить|выключить форматированый вывод html
     * @param bool $format
     * @return $this
     * @noinspection MethodShouldBeFinalInspection
     */
    final public function format(bool $format = true): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param string $className
     * @return AbstractElement
     */
    final protected function getTag(string $className): AbstractElement
    {
        if (!isset($this->content[$className])) {
            $obj = new $className($this);
            $this->content[$className] = $obj;
        }
        $tagName = preg_replace('~(.+)\\\\(\w+)$~ui', '$2', strtolower($className));
        $count = 1;
        if (isset($this->children[$tagName])) {
            $count = count($this->children[$tagName]) + 1;
        }
        $this->children[$tagName][$count] = $this->content[$className];
        return $this->content[$className];
    }


}