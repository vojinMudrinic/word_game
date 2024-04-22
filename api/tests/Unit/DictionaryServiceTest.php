<?php

namespace Tests\Unit;

use App\Services\DictionaryService;
use Tests\TestCase;


class DictionaryServiceTest extends TestCase
{
    public function testCheckWordInDictionarySuccess()
    {
        $result = DictionaryService::checkWordInDictionary('mom');
        $this->assertTrue($result);
    }

    public function testCheckWordInDictionaryFailure()
    {
        $result = DictionaryService::checkWordInDictionary('wadasdwd');
        $this->assertFalse($result);
    }
}
