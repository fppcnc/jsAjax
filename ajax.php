<?php
$input = $_GET['programmiersprache'];

$programmiersprachen = [
    'Ada',
    'C',
    'F',
    'JavaScript',
    'Csharp',
    'PHP'
];
if (in_array($input, $programmiersprachen)) {
    echo 'Ye';
} else {
    echo 'Ne';
}
