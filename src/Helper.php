<?php

declare(strict_types=1);

namespace Devidw\Helper;

class Helper
{
    /**
     * Capture output of a function with arguments and return it as a string.
     */
    public static function captureOutput(callable $callback, ...$args): string
    {
        ob_start();
        $callback(...$args);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
}
