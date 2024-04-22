<?php
namespace Tests\Feature;

use App\Class\Game;
use App\Class\User;
use Illuminate\Http\Request;
use Tests\TestCase;

class GameTest extends TestCase
{
    public function testScoreWordSuccess()
    {
        $user = new User();
        $game = new Game($user);
        $request = Request::create('/score-word', 'POST', ['word' => 'radar']);
        $response = $game->scoreWord($request);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(['score' => 6, 'palindrome_status' => 3], $response->getData(true));
    }
}
