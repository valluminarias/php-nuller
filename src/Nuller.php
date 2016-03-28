<?php
namespace Nuller;

Class Nuller {


    /**
     * @var string The default string placeholder
     */
    public static $default_string_placeholder = 'Null';

    /**
     * Nullified String
     *
     * @param $string String to be nullified
     * @param bool|false $as_string returns desired string value if true
     * @param string $display_string String to be returned if as_string is true
     * @return null|string
     */
    public static function nullified($string, $as_string = false, $display_string = '') {
        return $as_string ? self::nullifiedToString($string, $display_string) : null;
    }

    /**
     * Nullified to Desired String Placeholder
     *
     * @param $string String to be nullified
     * @param string $display_string String to replace as placeholder
     * @return string
     */
    public static function nullifiedToString($string, $display_string = '') {
        return $display_string ?: self::$default_string_placeholder;
    }

    /**
     * Nullified String only if Empty
     *
     * @param $string String to be nullified
     * @param string $display_string String to replace as placeholder
     * @return string
     */
    public static function nullifiedIfEmpty($string, $display_string = '') {
        return $string ?: self::nullifiedToString($string, $display_string);
    }

}