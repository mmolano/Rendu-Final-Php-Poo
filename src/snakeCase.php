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
        if(preg_match("/[-,_, ]/", $this->string)){
            return $this
                ->replace('-', ' ')
                ->ucwords()
                ->replace(' ', '_')
                ->strlower()
                ;
        } else {
            return $this
                ->preg_replace("/(.)(?=[A-Z])/", '$1_', $this->string)
                ->strlower();
        }


    }


}
