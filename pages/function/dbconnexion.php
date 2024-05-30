<?php

    function dbconnect() {
        static $connect=null;
        if($connect==null) {
            $connect=mysqli_connect("localhost",'root','root',"welearn");
            mysqli_query(dbconnect(), "SET CHARACTER SET utf8");
        }
        return $connect;
    }
?>