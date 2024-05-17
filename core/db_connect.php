<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webshop_fruitfish";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}


define("BASEURL", "http://localhost/webdev-base/");
define("BASEURL_CMS", "http://localhost/webdev-base/admin/");
define("ABSOLUTE_HREF", "C:/GLUCSD/finalversions/module-4-1-crud-wdv-LGuijt/assets/img/");

function prettyDump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}