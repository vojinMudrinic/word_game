<?php

namespace App\Class;

use App\Class\Abstract\ScoreSystem;

class User extends ScoreSystem
{
    public function getUserScore() {
        return $this->score;
    }

    public function getUserPalindromeStatus() {
        return $this->palindrome_status;
    }
}
