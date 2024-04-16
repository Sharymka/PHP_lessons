<?php

set_exception_handler(function (Throwable $exception){
    $logger = new Logger('error_handler');
    $logger->log($exception->getMessage());
    die('Сервер временно не работает, приносим свои извинения');
});