<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Class\Game;
use App\Class\User;

class WordSubmit extends Command
{
    protected $signature = 'wordSubmit {word : The word to submit}';
    protected $description = 'Submit the word and get the score';


    public function handle()
    {
        $wordInput = $this->argument("word");
        $user = new User();
        $game = new Game($user);
        $request = Request::create('/score-word', 'POST', ['word' => $wordInput]);
        $response = $game->scoreWord($request);
        $data = json_decode($response->getContent(), true);

        if(!empty($data["message"])) {
            $errorMsg = $data["message"];
            $this->error($errorMsg);
        } else {
            $score = $data['score'];
            $palindromeStatus = $this->parsePalindromeStatus($data['palindrome_status']);
            $this->info("Score: $score" . PHP_EOL . "Palindrome Status: $palindromeStatus");
        }
    }

    private function parsePalindromeStatus(int $status) {
        switch($status) {
            case 1:
                return "The word is not a palindrome";
            case 2:
                return "The word is almost a palindrome";
            case 3:
                return "The word is a palindrome";
            default:
                return "Unknown status";
        }
    }
}
