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


        if(preg_match("/[-,_, ]/", $this->string)){
            return $this
                ->replace('_', ' ')
                ->ucwords()
                ->replace(' ', '-')
                ->strlower();
        }else {
            return $this
                ->preg_replace("/(.)(?=[A-Z])/", '$1-', $this->string)
                ->strlower();

        }


    }


}

