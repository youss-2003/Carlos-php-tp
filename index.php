<?php

$uri=$_SERVER['REQUEST_URI'];
require_once("function.php");
switch ($uri) {
    case '/':
        view("Home");
        break;
     case '/contact':
        view("Contact");
        break;
    case '/Result':
        view("Result");
        break;
            
    default:
       view("Error");
        break;
}
