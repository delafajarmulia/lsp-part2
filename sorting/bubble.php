<?php
    echo 'Bubble Sort';
    $data = array(7, 5, 2, 9, 4);

    function bubble($data){
        $count = count($data);

        for($i = 0; $i < $count-1; $i++){
            for($j=0; $j < $count-$i-1; $j++){
                if($data[$j] > $data[$j+1]){
                    $temp = $data[$j];
                    $data[$j] = $data[$j+1];
                    $data[$j+1] = $temp;
                }
            }
        }

        return $data;
    }

    print_r(bubble($data));
?>