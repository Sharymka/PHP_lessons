<?php

class Logger
{
private string $name;

public function __construct(string $name)
{
    $this->name = $name;

}

function  log(string $message) {
    $name = $this->name;
    $fileName = 'logs/'. $name . '.log';
    $date = new DateTime();
    $dateFormatted = $date->format('Y-m-d H:i:s');
    $logMessage = "$dateFormatted - $name : $message \n";

    file_put_contents($fileName, $logMessage, FILE_APPEND);

}
}