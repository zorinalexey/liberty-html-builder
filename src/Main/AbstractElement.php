<?php

namespace Liberty\HtmlBuilder\Main;

/**
 *
 */
abstract class AbstractElement
{

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
    protected ?AbstractElement $parent = null;

    /**
     * @param AbstractElement|null $parent
     */
    public function __construct(AbstractElement|null $parent = null)
    {
        if ($parent) {
            $this->parent = $parent;
        }
    }

    /**
     * Получить потомков
     * @param string $tagName
     */
    public function childs(string|null $tagName = null): false|array|AbstractElement
    {
        return $this->children($tagName);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->__toString();
    }

    /**
     * @return string
     */
    abstract public function __toString(): string;

    public function __get($name)
    {
        return HtmlBuilderException::propertyNotFound(__CLASS__ . '::' . $name);
    }

    public function __set($name, $value)
    {
        return HtmlBuilderException::propertyNotFound(__CLASS__ . '::' . $name);
    }

    public function __call($name, $arguments)
    {
        return HtmlBuilderException::methodNotFound(__CLASS__ . '::' . $name);
    }

    public function __call_static($name, $arguments)
    {
        return HtmlBuilderException::methodNotFound(__CLASS__ . '::' . $name);
    }

    /**
     * @param string $tagName
     * @return string
     */
    protected function stringify(string $tagName): string
    {
        $str = '<' . $tagName;
        $str .= $this->getAttrString();
        if ($this->close) {
            $str .= '>' . implode('', $this->content);
            $str .= '</' . $tagName . '>';
        } else {
            $str .= '/>';
        }
        return $str;
    }

    /**
     * @return string
     */
    protected function getAttrString(): string
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

    /**
     * @param string $className
     * @return AbstractElement
     */
    protected function getTag(string $className): AbstractElement
    {
        if (!isset($this->content[$className])) {
            $obj = new $className($this);
            $this->content[$className] = $obj;
        }
        $tagName = preg_replace('~(.+)\\\\(\w+)$~ui', '$2', strtolower($className));
        if (isset($this->children[$tagName])) {
            $count = count($this->children[$tagName]) + 1;
        } else {
            $count = 1;
        }
        $this->children[$tagName][$count] = $this->content[$className];
        return $this->content[$className];
    }


}