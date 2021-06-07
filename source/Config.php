<?php

define("ROOT", "http://localhost/cadastrocliente");
define('ENVIRONMENT', 'Development');

if(ENVIRONMENT == "Development"){
    define('HOST', 'localhost');
    define('DATABASE', 'testeclientes');
    define('DBUSER', 'root');
    define('DBPASS', '');
}else{
    define('HOST', '');
    define('DATABASE', '');
    define('DBUSER', '');
    define('DBPASS', '');
}