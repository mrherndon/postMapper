<?php

namespace mrherndon;

class postMapper {
    function __invoke($postArray, $object){
        foreach ($object as $key => $value){
            if(isset($postArray[$key])){
                if($postArray[$key] == 'true') {
                    $object->{$key} = true;	
                } elseif($postArray[$key] == 'false') {
                    $object->{$key} = false;	
                } else {
                    $object->{$key} = $postArray[$key];
                }
            }
        }

        return $object;
    }
}