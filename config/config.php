<?php

try {
//host 
define("HOST", "localhost");
// define adalah sebuah variable comstant yg tidak akan menrubah value di dalamnya

// dbname
define("DBNAME", "coffe_shop");

// user
define("USER", "root");

// pass
define("PASS", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);

// PDO error mode for message error in php documentation
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //code...
} catch ( PDOException $Exception ) {
    //throw
    echo $Exception->getMessage();
}
