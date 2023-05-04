<?php

function dic(int $num) {
    if ($num == 1) {
        echo "1 * 1 = 1\n";
    } else {
        dic($num * ($num - 1));
    }
}


dic(2);
