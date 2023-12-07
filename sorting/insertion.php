<?php
    $data = array(7, 4, 6, 2, 8);

    function insertion($data){
        for($i = 1; $i < count($data); $i++){
            $temp = $data[$i];
            $j = $i - 1;
            while($temp < $data[$j] && $j >= 0){
                $data[$j + 1] = $data[$j];
                $data[$j] = $temp;
                $j--;
            }
        }
        return $data;
    }

    print_r(insertion($data));
?>