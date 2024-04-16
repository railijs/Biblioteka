<?php

class Validator {

        // pure method, tapec static
    static public function string($data, $min = 0,  $max = INF) {
        $data = trim($data);

        return is_string($data) 
        && strlen($data) >= $min
        && strlen($data) <= $max;  
    }

    static public function number($data, $min = 0,  $max = INF) {
        $data = trim($data);

        return is_numeric($data) 
        && $data >= $min
        && $data <= $max;  
    }

    static public function date($data) {    
        if(empty($data)) {
            return false;
        } else if (str_contains($data, '-')) {
            list($year, $month, $day) = explode ('-', $data);
            return checkdate($month, $day, $year);
        } else {
            return false;
        }
    }
}   
