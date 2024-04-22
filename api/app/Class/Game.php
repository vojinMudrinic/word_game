<?php

namespace App\Class;

use App\Class\User;
use App\Services\DictionaryService;
use Illuminate\Http\Request;

class Game
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function scoreWord(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'word' => 'required|string|max:255',
            ]);
            $word = strtolower($validatedData['word']);
            $hasWord = DictionaryService::checkWordInDictionary($word);

            if ($hasWord) {
                $this->user->calculateScore($word);
                return response()->json(['score' => $this->user->getUserScore(), 'palindrome_status' => $this->user->getUserPalindromeStatus()]);
            } else {
                return response()->json(['message' => 'Word does not exist in the English dictionary'], 200);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
