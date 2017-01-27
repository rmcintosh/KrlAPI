<?php

include('links.php');
include('db.php');

//$conn = db_connect();

//Main route

Flight::route('/', function(){
    //Redirect to api docs later.
    $arr = array ('result'=>'You need to hit an endpoint!');
    echo json_encode($arr);
});

Flight::route('/version', function(){
    //return version in json
    $arr = array('version'=>1);
    echo json_encode($arr);
});

Flight::route('GET /link/@id', function($id){
    $conn = db_connect();
    $data = getLink($id,$conn);
    echo json_encode($data, JSON_UNESCAPED_SLASHES);
});
?>
