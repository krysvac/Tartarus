<?php
if (!defined("TARTARUS_INSTALL_PATH")) {
    die("Something went wrong, try again...");
}
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception)
{
    echo "Tartarus: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class)
{
    $path = TARTARUS_INSTALL_PATH . "/src/{$class}/{$class}.php";
    if (is_file($path)) {
        include($path);
    } else {
        throw new Exception("Classfile '{$class}' does not exists.");
    }
}
spl_autoload_register('myAutoloader');
