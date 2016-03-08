<?php

    function display_value($first , $second)
    {
        if(!empty($first) || $first === '')
        {
            return $first;
        }
        else
        {
            return $second;
        }
    }

    function is_selected($old_vlaue, $check_value_1, $check_value_2, $check_type)
    {
        if ($check_value_1 == $old_vlaue)
        {
            $value[$check_value_1] =  $check_type;
            $value[$check_value_2] =  '';
        }
        else
        {
            $value[$check_value_1] =  '';
            $value[$check_value_2] =  $check_type;
        }
        return $value;
    }

    function session_value($message)
    {
        if (Session::has($message))
        {
            return Session::get($message);
        }
        else
        {
            return '';
        }
    }

    function get_id($string,$slice_it)
    {
        $length          = strlen($string);
        $length_of_slice = strlen($slice_it);
        $id_pos          = strpos($string,$slice_it);
        $new_string      = (int) substr($string, $id_pos+$length_of_slice, $length-$id_pos-$length_of_slice);
        return $new_string;
    }


