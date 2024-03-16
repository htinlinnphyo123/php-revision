<?php

    // function sumAll(int ...$array){
    //     return array_sum($array);
    // }

    // $x = 'sumAll';

    // if(is_callable($x)){
    //     echo $x(['a1a',3,4]);
    // };

    $x = function(callable $callback,int|float ...$numbers){
        return $callback(array_sum($numbers));
    };

    echo $x(function($element){
        return $element * 2;
    },1,2,10);






