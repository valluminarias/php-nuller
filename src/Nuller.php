<?php
namespace Nuller;

Class Nuller {

    /**
     * @param $string String to be nulled
     * @param bool|false $as_string returns desired string value if true
     * @param string $display_string String to be returned if as_string is true
     * @return null|string
     */
    public static function nullified($string, $as_string = false, $display_string = '') {
        return $as_string ? (empty($display_string) ?: 'Null') : null;
    }

}