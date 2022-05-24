
<?php

use LDAP\Result;

/**
 * Program for Replacing duplicate element in array with perticular element 
 */
class ReplaceDuplicate
{
    function replaceDuplicate()
    {
        $inputArray = array(10, 20, 20, 25, 27, 30, 25);
        $arraySize = sizeof($inputArray);

        echo "\nCurrent given array is : \n";
        for ($i = 0; $i < $arraySize; $i++) {
            echo $inputArray[$i] .  ", ";
        }

        for ($i = 0; $i < $arraySize; $i++) {
            for ($j = $i + 1; $j < $arraySize; $j++) {
                if ($inputArray[$i] == $inputArray[$j]) {
                    $inputArray[$j] = "Deven";
                }
            }
        }

        echo "\nAfter Replacing Duplicate element with Name 'Deven' array is : \n";
        for ($i = 0; $i < $arraySize; $i++) {
            echo $inputArray[$i] .  ", ";
        }
    }
}

$duplicateReplace = new ReplaceDuplicate;
$duplicateReplace->replaceDuplicate();
?>