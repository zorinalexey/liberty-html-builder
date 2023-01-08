<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Balance
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Balance
{

    protected ?int $balance = null;

    /**
     * Управляет балансом звука между правой и левой колонками.
     * @param string $balance Целое число от -100 до 100.
     * Значение ноль служит для баланса громкости, отрицательные числа
     * увеличивают громкость в левой колонке, а положительные - в правой.
     * @return self
     */
    public function balance(int $balance): self
    {
        if ($balance >= -100 && $balance <= 100) {
            $balance = $balance * 100;
            $this->balance = $balance;
        }

        return $this;
    }

}
