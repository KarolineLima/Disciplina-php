<?php

for($n=0; $n<=100; $n++){

    if($n<10){
        print("0");
    }

    print($n);

    if($n>0 && $n%10==9){
        print("\n");
    }else{
        print(" ");
    }


}