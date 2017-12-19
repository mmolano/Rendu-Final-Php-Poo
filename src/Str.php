<?php


namespace Strings;



class Str
{

    private $string;
    use camelCase;
    use snakeCase;
    use slugCase;
    use studlyCase;
    use kebabCase;
    use titleCase;


    public static function on($string)
    {
        return new self($string);
    }

    public function __construct(string $string)
    {
        $this->string = $string;


    }


    public function replace($select, $change){
        $string = str_replace($select, $change, $this->string);
        return new self($string);
    }

    public function preg_replace($search, $replace)
    {
        $string = preg_replace($search, $replace, $this->string);
        return new self($string);
    }

    public function ucwords(){
        $string = ucwords($this->string);
        return new self($string);
    }

    public function lcfirst(){
        $string = lcfirst($this->string);
        return new self($string);

    }

    public function __toString()
    {
        return $this->string;
    }


    public function toString(){
        return $this->string;
    }

    public function strlower(){
        $string = strtolower($this->string);
        return new self($string);
    }




}

