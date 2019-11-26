<?php

if (!function_exists('pretty_dump')) {
    /**
     * @param array|object $input
     * @param bool $export
     */
    function pretty_dump($input, $export = false)
    {
        if ($export === true) {
            echo "<pre>", var_export($input) , "</pre>";
        } else {
            echo "<pre>", var_dump($input) , "</pre>";
        }
    }
}


if (!function_exists('data_list')) {
    /**
     * @param array|object $input
     * @param bool $export
     */
    function data_list($data,$id,$val,$label="")
    {
        if(!empty($label))  $output = array('' => $label) ;
        
        foreach ($data as $record) {
            $output[$record[$id]]=$record[$val];
        }
        return $output;    
    }
}
