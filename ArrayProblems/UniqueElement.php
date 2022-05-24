<?php
/**
 * Program for printing unique elements from array
 */
class UniuqeElement
{
    function uniuqeElement()
    {
        $inputArray = array(10, 20, 20, 25, 30, 35, 40, 40);
        $arraySize = sizeof($inputArray);

        echo "\nCurrent given array is : \n";
        for ($i = 0; $i < $arraySize; $i++) {
            echo $inputArray[$i] .  ", ";
        }

        echo "\n\nUnique Elements in array are : \n";
        for ($i = 0; $i < $arraySize; $i++) {

            for ($j = 0; $j < $i; $j++) 
                if ($inputArray[$i] == $inputArray[$j])
                    break;

                if ($i == $j)
                    echo $inputArray[$i], " ";
            
        }
    }
}

$unique = new UniuqeElement;
$unique->uniuqeElement();
?>