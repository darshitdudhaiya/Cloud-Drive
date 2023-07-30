<?php
$sourceDir = 'D:\messanger'; // Relative path to the directory

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($sourceDir),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $file) {
    // Process the file
    echo $file->getPathname() . PHP_EOL;
}
?>
