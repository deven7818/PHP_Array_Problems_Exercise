
<?php
/**
 * Prorgam for Printing duplicate elements in array
 */
class DuplicateElement
{
    function duplicateElements()
    {
        $inputArray = array(10, 15, 20, 25, 25, 30, 32, 35, 32);

        echo("Duplicate elements present in given array are : ");
        for ($i = 0; $i < count($inputArray); $i++) {
            for ($j = $i + 1; $j < count($inputArray); $j++) {
                if ($inputArray[$i] == $inputArray[$j])
                    echo($inputArray[$i] . " ");
            }
        }
    }
}
$duplicate= new DuplicateElement;
$duplicate->duplicateElements();