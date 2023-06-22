<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//-----------------Importing Required Libraries-----------------------------
require_once("libs/classes/App_DB.php");
require_once("libs/classes/DbPathsArray.php");
//-Creating Object and passing user info to the constructor of App_DB class-
$db = new App_DB(DBU::$dba_user);//passing database login details from DbPathArray.php file

$sql = 'SELECT * FROM AccountTypes';
$list = $db->getRecordSetFilled($sql);
//echo('sql: '.$db->sqlToReturn);
if(isset($list) && is_array($list) && count($list) > 0){
    foreach($list as $row){
        echo($row['AccountTypeID'].':');
        echo($row['AccountType'].':');
        echo($row['SeatID'].'<hr>');
    }
}else{
   echo('Error: '.$db->tempVar);
}
echo($db->getValue("SELECT TOP (1) AccountName FROM Accounts WHERE AccountID = :a",array(':a'=>'1')));
echo('<hr>');
if($db->dbQuery("SELECT AccountName FROM Accounts WHERE AccountID = :id",array(':id'=>2))){
    echo('Found...');
}else{
    echo('Not Found');
}
echo('<hr>');
echo('<select>');
    echo($db->fillCombo("SELECT AccountID,AccountName FROM Accounts","AccountID","AccountName"));
echo('</select>');