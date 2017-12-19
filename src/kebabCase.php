<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 15/12/2017
 * Time: 14:11
 */

namespace Strings;


trait kebabCase
{
    public function kebabCase(){
        return $this
            ->slugCase();
    }

}