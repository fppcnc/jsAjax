<?php
$userinput = $_POST['userinput'];

$programmiersprachen = [
    'Ada',
    'C',
    'F',
    'JavaScript',
    'Csharp',
    'PHP'
];
if (in_array($userinput, $programmiersprachen)) {
    echo 'Ye';
} else {
    echo 'Ne';
}
