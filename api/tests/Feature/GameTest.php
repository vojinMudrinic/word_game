<?php
namespace Tests\Unit\Class;

use App\Class\Game;
use App\Class\User;
use App\Services\DictionaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
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
