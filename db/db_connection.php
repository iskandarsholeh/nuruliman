<?php
session_start();
session_regenerate_id(true);
// change the information according to your database
mysqli_connect("us-cdbr-east-04.cleardb.com","b4d4b5e8043e16","1109892b","heroku_afcc4630639690d");
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}
?>