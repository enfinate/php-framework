<?php

function loadEnv($filePath)
{
    $envData = [];
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '#') === 0) {
            continue;
        }
        list($key, $value) = explode('=', $line, 2) + [NULL, NULL];
        $key = trim($key);
        $value = trim($value);
        if ($key !== null && $value !== null) {
            $envData[$key] = $value;
        }
    }

    return $envData;
}


$envFilePath = __DIR__ . '/.env';
$envData = loadEnv($envFilePath);
// return $envData;

function env_data_json(){
    $envFilePath = __DIR__ . '/.env';
    $envData = loadEnv($envFilePath);
    header("Content-Type: application/json;charset=utf-8");
    return json_encode($envData);
}

function env_data(){
    $envFilePath = __DIR__ . '/.env';
    $envData = loadEnv($envFilePath);
    return $envData;
}

define("ENV_DATA", env_data());
