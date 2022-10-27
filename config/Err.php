<?php


class Err {

    public static function error($fieldName) {
        $text = $_SESSION[$fieldName];
        unset($_SESSION[$fieldName]);
        return $text;
    }
    public static function addError($fieldName, $errorText) {
        $_SESSION[$fieldName] = $errorText;
    }

    public static function bindField($fieldName, $value) {
        $_SESSION["value_".$fieldName] = $value;
    }

    public static function getField($fieldName) {
        $text = $_SESSION["value_".$fieldName];
        unset($_SESSION["value_".$fieldName]);
        return $text;
    }

}
