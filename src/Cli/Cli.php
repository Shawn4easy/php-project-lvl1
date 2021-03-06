<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

class Cli
{
    /**
     * @param string $text
     * @param string|null $args
     */
    public function printText(string $text, ?string $args = null): void
    {
        line($text, $args);
    }

    /**
     * @param string $text
     * @return string
     */
    public function returnStdinWithMessageInFirst(string $text): string
    {
        return prompt($text);
    }
}
