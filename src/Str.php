<?php


namespace Strings;



class Str
{

    private $string;


    public static function on($string)
    {
        return new self($string);
    }

    public function __construct(string $string)
    {
        $this->string = $string;


    }


    public function replace($select, $change){
        $this->string = str_replace($select, $change, $this->string);
        return $this;
    }


    public function ucwords(){
        $this->string = ucwords($this->string);
        return $this;
    }

    public function lcfirst(){
        $this->string = lcfirst($this->string);
        return $this;

    }

    public function __toString()
    {
        return $this->string;
    }


    public function toString(){
        return $this->string;
    }

    public function strlower(){
        $this->string = strtolower($this->string);
        return $this;
    }




}
