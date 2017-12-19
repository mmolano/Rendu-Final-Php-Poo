<?php


namespace Strings;

use PHPUnit\Framework\TestCase;



class StrTest extends TestCase
{


    public function testExo1()
    {

        $string = (string)Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
        $this->assertSame('myString', $string);

    }

}