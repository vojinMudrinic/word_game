<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class DictionaryService
{

    public static function checkWordInDictionary($word)
    {
        $response = Http::get('https://api.dictionaryapi.dev/api/v2/entries/en/' . $word);
        $data = json_decode($response->body(),true);

        if(isset($data["message"])) {
            return false;
        }
        return true;
    }
}