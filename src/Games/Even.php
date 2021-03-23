<?php

namespace Brain\Games;

class Even
{
    public const MIN_NUMBER = 0;
    public const MAX_NUMBER = 15;

    public const ANSWER_YES = 'yes';
    public const ANSWER_NO = 'no';

    /**
     * @return int
     */
    public function generateRandNumber(): int
    {
        return rand(self::MIN_NUMBER, self::MAX_NUMBER);
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }

    /**
     * @param int $number
     * @return string
     */
    public function getCorrectAnswer(int $number): string
    {
        return $this->isEven($number) ? self::ANSWER_YES : self::ANSWER_NO;
    }
}
