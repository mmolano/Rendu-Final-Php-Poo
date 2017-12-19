<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 14/12/2017
 * Time: 21:55
 */

namespace Strings;


trait snakeCase
{

    public function snakeCase()
    {
            return $this
            ->replace('-', ' ')
            ->replace(' ', '_')
            ->preg_replace("/(.)(?=[A-Z])/", '$1_', $this->string)
            ->replace('__', '_')
            ->strlower();
            ;
    }



}
