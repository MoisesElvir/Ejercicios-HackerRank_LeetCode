<?php

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

function minimumNumber($n, $password) {
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";
    
    $missing_types = 0;
    // Return the minimum number of characters to make the password strong
    
    if (strpbrk($password, $numbers) === false) {
        $missing_types++;
    }


    if (strpbrk($password, $lower_case) === false) {
        $missing_types++;
    }

 
    if (strpbrk($password, $upper_case) === false) {
        $missing_types++;
    }


    if (strpbrk($password, $special_characters) === false) {
        $missing_types++;
    }


    $required_chars = max(6 - $n, $missing_types);

    return $required_chars;
}

$n = 3;
$password = "Ab1";
$answer = minimumNumber($n, $password);

echo $answer . "\n";

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($fptr);