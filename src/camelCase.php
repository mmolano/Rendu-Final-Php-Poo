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
            return $this
                ->replace('_', ' ')
                ->ucwords()
                ->replace(' ', '')
                ->lcfirst();
    }

}

