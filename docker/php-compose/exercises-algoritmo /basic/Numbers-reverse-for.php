<?php

for ($n = 99; $n >= 0; $n--) {

    if ($n >= 0 && $n<=9) {
        print("0");
    }

    print($n." ");

    if ($n%10==0) {
        print("\n");
    }

}