<?php

 function createPassword($length){
    $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!%&?@/";
    return substr(str_shuffle($string), 0, $length);
 };