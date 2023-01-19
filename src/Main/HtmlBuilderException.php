<?php

namespace Liberty\HtmlBuilder\Main;

use Exception;

class HtmlBuilderException extends Exception
{
    public static function methodNotFound($method)
    {
        $message = "Method not found: $method";
        self::debugInfo($message);
    }

    private static function debugInfo(string $message = null)
    {
        throw new self($message . self::backtrace());
    }

    private static function backtrace(): string
    {
        $messages = "\n backtrace : \n";
        $step = 0;
        foreach (debug_backtrace() as $key => $trace) {
            if ($key >= 2) {
                $step++;
                $messages .= $step . ")\t file - " . $trace['file'] . " line - " . $trace['line'] . "\n";
                $messages .= "\t class - " . $trace['class'] . $trace['type'];
                $messages .= $trace['function'] . " (" . self::getArgsString($trace['args']) . ')';
                $messages .= "\t args - " . print_r($trace['args'], true) . "\n";
                if (isset($trace['object'])) {
                    $messages .= "\t object - " . $trace['object']::class . "\n";
                }
            }
        }
        return $messages;
    }

    private static function getArgsString(array $args): string
    {
        $str = "";
        foreach ($args as $value) {
            if (is_string($value)) {
                $str .= "'" . $value . "'";
            } else {
                $addArgs = self::getArgsString($value);
                if (!empty($addArgs)) {
                    $str .= ", " . $addArgs;
                }
            }
        }
        return $str;
    }

    public static function propertyNotFound($property)
    {
        $message = 'Property ' . $property . ' not found.';
        self::debugInfo($message);
    }
}