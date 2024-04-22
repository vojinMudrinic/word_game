<?php

namespace Tests\Unit\Class;

use App\Class\User;
use Tests\TestCase;

class UserScoreTest extends TestCase
{
    public function testUserScoreWithPalindrome()
    {
        $user = new User();
        $user->calculateScore('radar');
        $this->assertEquals(6, $user->getUserScore());
        $this->assertEquals(3, $user->getUserPalindromeStatus());
    }

    public function testUserScoreWithAlmostPalindrome()
    {
        $user = new User();
        $user->calculateScore('banana');
        $this->assertEquals(5, $user->getUserScore());
        $this->assertEquals(2, $user->getUserPalindromeStatus());
    }

    public function testUserScoreWithRegularWord()
    {
        $user = new User();
        $user->calculateScore('hello');
        $this->assertEquals(4, $user->getUserScore());
        $this->assertEquals(1, $user->getUserPalindromeStatus());
    }
}
