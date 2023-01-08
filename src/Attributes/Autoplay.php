<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Autoplay
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Autoplay
{

    protected ?string $autoplay = null;

    /**
     * Звук начинает играть сразу после загрузки страницы.
     * @param bool $play true - включить автовоспроизведение
     * @return self
     */
    public function autoplay(bool $play): self
    {
        if ($play) {
            $this->autoplay = 'autoplay';
        }
        return $this;
    }

}
