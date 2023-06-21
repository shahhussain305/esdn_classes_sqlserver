<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//-----------------Importing Required Libraries-----------------------------
require_once("libs/classes/App_DB.php");
require_once("libs/classes/DbPathsArray.php");
//-Creating Object and passing user info to the constructor of App_DB class-
$db = new App_DB(DBU::$dba_user);//passing database login details from DbPathArray.php file
$query = 'SELECT * FROM AccountTypes';   
$list = $db->getRecordSet($query);
if(isset($list) && is_array($list) && count($list) > 0){
    foreach($list as $row){
        echo($row['AccountTypeID'].'<br>');
        echo($row['AccountType'].'<br>');
        echo($row['SeatID'].'<hr>');
    }
}