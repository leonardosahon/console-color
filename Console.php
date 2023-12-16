<?php
declare(strict_types=1);

namespace Console;

use Console\Format\Background;
use Console\Format\Foreground;

/**
 * Used to log strings with custom colors to console using php
 *
 * Inspired by this gist
 * @link https://gist.github.com/sallar/5257396
 *
 * Original colored CLI output script:
 * (C) Jesse Donat https://github.com/donatj
 */
class Console {
    /**
     * Logs a string to console.
     * @param string $text Input String
     * @param Foreground $color Text Color
     * @param Background|null $bg_color Background Color
     * @param boolean $newline Append EOF?
     * @return void
     */
    public static function log(string $text = '', Foreground $color = Foreground::normal, ?Background $bg_color = null, bool $newline = true) : void
    {
        $text = $newline ? $text . PHP_EOL : $text;
        $colored_string = "";

        if($bg_color)
            $colored_string .= "\033[" . $bg_color->value . "m";

        $colored_string .= "\033[" . $color->value . "m";

        echo $colored_string . $text . "\033[0m";
    }

    /**
     * Plays a bell sound in console (if available)
     * @param int $count Bell play count
     * @return void
     */
    public static function bell(int $count = 1) : void
    {
        echo str_repeat("\007", $count);
    }

}