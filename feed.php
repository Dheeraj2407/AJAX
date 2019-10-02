<?php
    $cn=new mysqli("localhost","root","","AJAX") or die("Connection failed");
    $val=$_GET['val'];
    if($val=="1"){
        $data=$cn->query("SELECT feed from feeds ORDER BY id DESC ");
        for($i=0;$i<$data->num_rows;$i++){
            $feeds=$data->fetch_array();
            echo "<p>$feeds[0]</p>";

        }
    }
    if($val=="2"){
        $feed=$_GET['feed'];
        $cn->query("INSERT INTO feeds(feed) values('$feed')");
    }
    $cn->close();

?>