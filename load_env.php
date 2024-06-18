<?php
function load_env($file)
{
    if (!file_exists($file)) {
        throw new Exception('.env file not found');
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0 || empty($line)) {
            continue;
        }

        list($key, $value) = explode('=', $line, 2);

        $key = trim($key);
        $value = trim($value, '"');

        putenv("$key=$value");
    }
}
load_env ('Data.env');
?>