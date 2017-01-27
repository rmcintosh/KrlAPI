<?php

function getLink($id,$conn) {

if ($conn != NULL){
    $sql = "SELECT url AS url FROM url_redirects WHERE short='" . $id . "' LIMIT 1";
    $sth = $conn->prepare($sql);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    $url = $result;
    if ($url != false){
    return $url;
    } else {
     $url = array("url" => "Link not found!");
     return $url;
    }

}
else 
{
    $url = array("url" => "There was an error getting this url");
    return $url;
}
}
?>
