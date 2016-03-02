<?php
use App\Http;

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
            return Session::get('message');
        }
        else
            return '';
    }

    function get_id($string,$slice_it)
    {
        $length          = strlen($string);
        $length_of_slice = strlen($slice_it);
        $id_pos          = strpos($string,$slice_it);
        $new_string      = (int) substr($string, $id_pos+$length_of_slice, $length-$id_pos-$length_of_slice);
        return $new_string;
    }


    function display_resource_action($resource, $action)
    {
        $display        = '';
        
        foreach ($resource as $value)
        {
           
            $val      = $value['resource'];
            $id       = 'resource'.$value['id'];
            $display .= '<tr><td class="privilege_display"><label id="'.$id.'"
            name="'.$val.'">'.$val.'</label>&nbsp&nbsp</td>';
        }
            // Getting action table data.
        //     $get_action = get_action();
            
        //     foreach ($get_action as $value_action)
        //     {
        //         $count_action++;
        //         $val_action = $value_action['operation'];
        //         $id_action  = $id.'action'.$value_action['id'];
        //         $display   .= '<td class="privilege_display">
        //         <input id="'.$id_action.'" type="checkbox" name="'.$val_action.'" value="'.$val_action.'">
        //         &nbsp'.$val_action.' &nbsp&nbsp </td> ';
        //     }

        //     $display .= '<br/> </tr>';
        // }//end foreach
        //     $count_action /= 2;
        //     $display      .= "<input id='count_action' type='hidden' name='count_action' value='{$count_action}'>";
        //     $display      .= "<input id='count_resource' type='hidden' name='count_resource' value='{$count_resource}'>";

        return $display;
    }
