<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 14/12/2017
 * Time: 21:55
 */

namespace Strings;


trait slugCase
{


    public function slugCase()
    {
        return $this
        ->replace('_', ' ')
        ->replace(' ', '-')
        ->preg_replace("/(.)(?=[A-Z])/", '$1-', $this->string)
        ->replace('--', '-')
        ->strlower();

    }


}

