<?php

    $indexOf;

    function linearSearch($data, $willFind){
        $count = count($data);
        $sumFind = array();

        for($i=0; $i < $count; $i++){
            $countSum = count($sumFind);
            if($data[$i] == $willFind){
                if($countSum == 0){
                    $sumFind[0] = $i;
                }else{
                    array_push($sumFind[count($sumFind)-1], $i);
                }
                return $sumFind;
            }
        }

        return -1;
    }

    $data = array(4, 6, 3, 5, 2, 5);
    $result = linearSearch($data, 5);
    if($result == -1)
        echo 'not found';
    else{
        // foreach($result as $value){
        //     echo $value;
        // }
        print_r($result);
    }
?>