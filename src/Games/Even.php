<?php

namespace Brain\Games;

class Even
{
    public const MIN_NUMBER = 0;
    public const MAX_NUMBER = 15;

    public const ANSWER_YES = 'yes';
    public const ANSWER_NO = 'no';

    public function generateRandNumber(): int
    {
        return rand(self::MIN_NUMBER, self::MAX_NUMBER);
    }

    public function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }
}
