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

    public function testExo2(){

        $string = Str::on('my_string')->camelCase()->toString(); // true
        $this->assertSame('myString', $string);

    }

    public function testExo2_5(){

        $string = Str::on('my_string')->camelCase()->toString();
        $this->assertSame('myString', $string); // true

        $string = Str::on('myString')->camelCase()->toString();
        $this->assertSame('myString', $string); // true

        $string = Str::on('my-string')->camelCase()->toString();
        $this->assertSame('myString', $string); // true

        $string = Str::on('my string')->camelCase()->toString();
        $this->assertSame('myString', $string); // true

        $string = Str::on('My String')->camelCase()->toString();
        $this->assertSame('myString', $string); // true


    }

    public function testExo3(){

        $string = Str::on('my_string')->snakeCase()->toString();
        $this->assertSame('my_string', $string); // true

        $string = Str::on('myString')->snakeCase()->toString();
        $this->assertSame('my_string', $string); // true

        $string = Str::on('my-string')->snakeCase()->toString();
        $this->assertSame('my_string', $string); // true

        $string = Str::on('my string')->snakeCase()->toString();
        $this->assertSame('my_string', $string); // true

        $string = Str::on('My String')->snakeCase()->toString();
        $this->assertSame('my_string', $string); // true

    }

    public function testExo4(){

        $string = Str::on('my_string')->slugCase()->toString();
        $this->assertSame('my-string', $string); // true


        $string = Str::on('myString')->slugCase()->toString();
        $this->assertSame('my-string', $string); // true

        $string = Str::on('my-string')->slugCase()->toString();
        $this->assertSame('my-string', $string); // true


        $string = Str::on('my string')->slugCase()->toString();
        $this->assertSame('my-string', $string); // true

        $string = Str::on('My String')->slugCase()->toString();
        $this->assertSame('my-string', $string); // true

    }

}