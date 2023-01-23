<?php

function getFileSize($id)
{
    $file = get_attached_file($id);
    if ($file) {
        $bytes = filesize($file);
        $s = array('b', 'Kb', 'Mb', 'Gb');
        $e = floor(log($bytes) / log(1024));
        return sprintf('%.2f ' . $s[$e], ($bytes / pow(1024, floor($e))));
    } else {
        return null;
    }
}
