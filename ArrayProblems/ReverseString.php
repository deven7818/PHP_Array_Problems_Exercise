<?php

/**
 * Program for reverse the string
 */
class ReverseString
{
    function stringReverse()
    {
        $input = readline("Enter String to reverse : ");
        $size = strlen($input);
        echo "String After reverse is : ";
        for ($i = $size - 1; $i >= 0; $i--) {
            echo $input[$i];
        }
    }
}
$reverse = new ReverseString;
$reverse->stringReverse();
?>