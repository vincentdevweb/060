<?php

require_once('dictionnary.php');

// Source file to search dictionnary occurences
$filename = 'listRegistration.php';

// For each dictionnary entry
foreach ($dictionnary as $key => $value) {

    $searchedValue = $dictionnary[$key];
    $newValue = "<?= \$dictionnary['" . $key . "'] ?>";

    // Try to find all occurences and rewrite file if needed
    $fileAsStr = file_get_contents($filename);
    $modifiedFileAsStr = str_replace($searchedValue, $newValue, $fileAsStr);
    if ($modifiedFileAsStr != $fileAsStr) {

        file_put_contents($filename, $modifiedFileAsStr);
    }
}
