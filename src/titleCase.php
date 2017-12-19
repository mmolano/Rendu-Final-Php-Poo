<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 15/12/2017
 * Time: 14:17
 */

namespace Strings;


trait titleCase
{
    public function titleCase(){
        return $this
            ->studlyCase();

    }
}