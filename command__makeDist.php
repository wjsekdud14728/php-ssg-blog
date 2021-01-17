<?php

$originFiles = [
    "index.ssghtml.php",
    "about.ssghtml.php",
];

foreach ( $originFiles as $originFile) {
    $distFileName= str_replace(".ssghtml.php", '.html', $originFile);
    $command = "c:\\xampp\\php\\php.exe {$originFile} > {$distFileName}";
    echo $command;
    exit;
}