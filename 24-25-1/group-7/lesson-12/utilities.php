<?php
function read_json()
{
    return json_decode(file_get_contents(__DIR__ . "/santas.json"), true);
}

function santa_exists($name)
{
    return array_search(
        $name,
        array_column(read_json(), "name")
    ) != false;
}

function redirect($path)
{
    header("Location: " .  $path);
    die;
}
