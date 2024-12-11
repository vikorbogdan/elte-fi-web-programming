<?php
function redirect($path)
{
    header("Location: " . $path);
    die;
}


function read_json($associative = true)
{
    return json_decode(
        file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/users.json"),
        $associative
    );
}

function write_json($data)
{
    file_put_contents(
        $_SERVER["DOCUMENT_ROOT"] . "/users.json",
        json_encode($data, JSON_PRETTY_PRINT)
    );
}
