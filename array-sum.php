<?php

/*
 * Complete the simpleArraySum function below.
 */
function simpleArraySum($ar) {
   // Given Inputs
    $n = 6;
    $ar = array(1 2 3 4 10 11);
    /*
     * Write your code here.
     */
    $sum = 0;
    $count_array= count($ar);
    for ($i=0; $i <= $count_array; $i++ )
    {
        $sum=$sum + $ar[$i];
        
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
