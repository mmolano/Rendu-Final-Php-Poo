<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 14/12/2017
 * Time: 21:54
 */

namespace Strings;


trait camelCase
{


    public function camelCase(){
        if(preg_match('/[-,_, ]/', $this->string)) {
            return $this
                ->strlower()
                ->replace('-', ' ')
                ->replace('_', ' ')
                ->ucwords()
                ->replace(' ', '')
                ->lcfirst();

        } else {
            return $this;
        }
    }

}

