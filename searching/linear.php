<?php
    function linearSerach($data, $find){
        $count = count($data);
        for($i = 0; $i < $count; $i++){
            if($data[$i] == $find){
                return $i;
            }
        }
        return -1;
    }

    $data = array(8, 5, 7, 2, 7);
    $result = linearSerach($data, 7);
    if($result == -1)
        echo 'element not found';
    else
        echo "element is present at index $result";
?>