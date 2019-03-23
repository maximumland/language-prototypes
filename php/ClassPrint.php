<?php

class ClassPrint
{
    
    function main($variableMethod) {
        if (is_array($variableMethod)) {
            for ($row = 0; $row < count($variableMethod, 0); $row++) {
                for ($col = 0; $col < (count($variableMethod, 1) / count($variableMethod, 0) - 1); $col++) {
                    echo $variableMethod[$row][$col] . "\t";
                }
                echo "\n";
            }
        } else {
            echo $variableMethod;
        }
    }
    
}

?>
