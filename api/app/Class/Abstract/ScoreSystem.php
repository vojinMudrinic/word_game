<?php

namespace App\Class\Abstract;

abstract class ScoreSystem
{
    protected int $score = 0;
    protected int $palindrome_status;

    public function calculateScore($word)
    {
        $uniqueLetters = count(array_unique(str_split($word)));
        $this->score += $uniqueLetters;

        if ($this->isPalindrome($word)) {
            $this->score += 3;
            $this->palindrome_status = 3;
            return;
        }

        if ($this->isAlmostPalindrome($word)) {
            $this->score += 2;
            $this->palindrome_status = 2;
            return;
        }

        $this->palindrome_status = 1;
        return;
    }

    private function isPalindrome($word)
    {
        return $word === strrev($word);
    }

    private function isAlmostPalindrome($word)
    {
        $len = strlen($word);
        for ($i = 0; $i < $len / 2; $i++) {
            if ($word[$i] !== $word[$len - $i - 1]) {
                $wordWithoutCurrentLetter = substr_replace($word, '', $i, 1);
                if ($wordWithoutCurrentLetter === strrev($wordWithoutCurrentLetter)) {
                    return true;
                }

                $wordWithoutOtherLetter = substr_replace($word, '', $len - $i - 1, 1);
                if ($wordWithoutOtherLetter === strrev($wordWithoutOtherLetter)) {
                    return true;
                }

                return false;
            }
        }

        return false;
    }
}
