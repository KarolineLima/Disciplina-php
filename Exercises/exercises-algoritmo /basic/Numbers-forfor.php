<?php
for($n=0; $n<10; $n++){

    for($index=0; $index<10; $index++){
        if($index != 9){
            echo $n.$index." ";
        }
        else{
           echo $n.$index."\n";
        }
    }
}