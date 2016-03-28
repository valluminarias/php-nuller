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
        return $as_string ? self::nullifiedToString($string, $display_string) : null;
    }

    public static function nullifiedToString($string, $display_string = '') {
        return $display_string ?: 'Null';
    }

    public static function nullifiedIfEmpty($string, $display_string = '') {
        return $string ?: self::nullifiedToString($string, $display_string);
    }

}