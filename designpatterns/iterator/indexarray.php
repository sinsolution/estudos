<?php


$arr = range(10, 1000000);
foreach ($arr as $key => $val) {
    printf("%d => %d\n", $key, $val);
}

$bytesUsados = memory_get_usage();

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
echo "<br>";
echo "Memoria usada: ".formatBytes($bytesUsados,2);