<?php

function db_connect() {

    //Load config
    $config = parse_ini_file('/etc/krl/config.ini');
    $host = $config['host'];
    $username = $config['username'];
    $password = $config['password'];
    $dbname = $config['database'];
    //PDO or bust
    try {
        $dbh = new PDO('mysql:host=localhost;dbname='.$dbname,$username,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
	error_log("Con: " . $dbh);
    } catch (PDOException $e) {
        error_log($e);
        echo $e;
    }
}

$conn = db_connect();

?>
