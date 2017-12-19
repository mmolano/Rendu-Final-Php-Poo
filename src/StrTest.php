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

    public function testExo4_5(){

        $string = Str::on('my_string')->kebabCase()->toString();
        $this->assertSame('my-string', $string); // true


        $string = Str::on('myString')->kebabCase()->toString();
        $this->assertSame('my-string', $string); // true

        $string = Str::on('my-string')->kebabCase()->toString();
        $this->assertSame('my-string', $string); // true


        $string = Str::on('my string')->kebabCase()->toString();
        $this->assertSame('my-string', $string); // true

        $string = Str::on('My String')->kebabCase()->toString();
        $this->assertSame('my-string', $string); // true

    }

    public function testExo5(){

        $string = Str::on('my_string')->studlyCase()->toString();
        $this->assertSame('MyString', $string); // true

        $string = Str::on('myString')->studlyCase()->toString();
        $this->assertSame('MyString', $string); // true

        $string = Str::on('my-string')->studlyCase()->toString();
        $this->assertSame('MyString', $string); // true


        $string = Str::on('my string')->studlyCase()->toString();
        $this->assertSame('MyString', $string); // true

        $string = Str::on('My String')->studlyCase()->toString();
        $this->assertSame('MyString', $string); // true

    }

    public function testExo5_5(){

        $string = Str::on('my_string')->titleCase()->toString();
        $this->assertSame('MyString', $string); // true

        $string = Str::on('myString')->titleCase()->toString();
        $this->assertSame('MyString', $string); // true

        $string = Str::on('my-string')->titleCase()->toString();
        $this->assertSame('MyString', $string); // true


        $string = Str::on('my string')->titleCase()->toString();
        $this->assertSame('MyString', $string); // true

        $string = Str::on('My String')->titleCase()->toString();
        $this->assertSame('MyString', $string); // true
    }

    public function testExo6(){

        $str = Str::on('mY StrIng');

        $this->assertSame('myString', $str->camelCase()->toString()); // true

        $this->assertSame('my_string', $str->snakeCase()->toString()); // true

        $this->assertSame('MyString', $str->studlyCase()->toString()); // true

        $this->assertSame('MyString', $str->titleCase()->toString()); // true

        $this->assertSame('my-string', $str->slugCase()->toString()); // true

        $this->assertSame('my-string', $str->kebabCase()->toString()); // true

        $this->assertSame('mY StrIng', $str->toString()); // true

        $this->assertSame('mY StrIng', (string) $str); // true


    }
}