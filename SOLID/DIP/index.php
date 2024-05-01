<?php

echo "Dependancy Inversion";

$logger = new Logger();

$errorHandler = new ErrorHandler();

set_error_handler(function ($error, $errstr, $errfile, $errline) use ($errorHandler) {

    return $errorHandler->error($error, $errstr, $errfile, $errline);
});




set_error_handler(function ($exception) use ($errorHandler) {

    return $errorHandler->$exception($exception);
});
