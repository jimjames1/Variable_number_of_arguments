<?php
//Logging and Deburgging
function logmessage(...$messages)
{
    foreach ($messages as $msg) {
        error_log($msg);
    }
}
logmessage('user logged in', 'ID: 123', 'IP: 1.2.3.4');


//Mathematical Calculation
function average(...$num)
{
    return array_sum($num) / count($num);
}
echo average(5, 10, 15);


//Flexible API Endpoints
function filterData($data, ...$filters)
{
    foreach ($filters as $filter) {
        $data = array_filter($data, $filter);
    }
    return $data;
}

//String Formating
function formatingstring($format, ...$args)
{
    return vsprintf($format, $args);
}
echo formatingstring('Hello %s, you have %d new messages.', 'James', 45);
