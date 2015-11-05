<?php
/**
 * Render content to theme.
 *
 */

if (!isset($tartarus)) {
    die("Something went wrong :/");
}
// Extract the data array to variables for easier access in the template files.
extract(get_object_vars($tartarus));
 
// Include the template functions.
include(__DIR__ . '/functions.php');
 
// Include the template file.
include(__DIR__ . '/index.tpl.php');
