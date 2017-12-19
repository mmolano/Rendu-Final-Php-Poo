<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 14/12/2017
 * Time: 21:56
 */

namespace Strings;


trait studlyCase
{

    public function studlyCase()
    {
        return $this
            ->camelCase()
            ->ucwords();

    }


}

