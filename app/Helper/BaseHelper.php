<?php
/**
 * Created by PhpStorm.
 * User: GDNT
 * Date: 07-Dec-16
 * Time: 1:25 PM
 */

namespace app\Helper;


class BaseHelper
{
    public static function clean($string)
    {
        $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '_', $string); // Removes special chars.

        return preg_replace('/-+/', '_', $string); // Replaces multiple hyphens with single one.
    }
}