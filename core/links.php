<?php

function getLink($id,$conn) {

if ($conn != NULL){
    $sql = "SELECT url AS url FROM url_redirects WHERE short='" . $id . "' LIMIT 1";
    $sth = $conn->prepare($sql);
    $sth->execute();
    $result = $sth->fetch();

    $url = $result;

}
else 
{
    $url = array("url","NULL");
}
    return $url;
}

?>
