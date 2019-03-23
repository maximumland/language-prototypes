<?php

class ClassQuery
{
    function main($variableHost, $variableUsername, $variablePassword, $variableDatabase, $variableQuery) {
        $instanceMySQL = new mysqli($variableHost, $variableUsername, $variablePassword, $variableDatabase);
        $databaseOutput = $instanceMySQL->query($variableQuery);
        $instanceMySQL->close();
        return $databaseOutput;
    }
}

?>
