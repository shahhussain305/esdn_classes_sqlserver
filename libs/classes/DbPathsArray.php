<?php
/**
 * Description of DBU class=> Database Users Class collects existing users to connect to target database by 
 * providing user, password, host and database name
 * Benefits of DBU class=> 
 *      You can connect to database from each page with separate user which will have separate privileges, which will 
 *      minimize the threat to hack the database with DBA user. Values of each key has encrypted with base64_encode() function,
 *      and will need to decrypt the same in the DB.php class which has already been done. 
 *
 * @author shah
 */
class DBU {
    
    static $view_user = array(
                                'user'=>'U0E=', //SA
                                'key'=>'U3dhdEAxMjM0IQ==',//Swat@1234!
                                'host'=>'MTcyLjE2LjAuMTQ3',//172.16.0.147
                                'db'=>'RGlzdHJpY3RDYXNlTWFuYWdlbWVudA=='//DistrictCaseManagement
                                );
    static $dba_user = array(
                                'user'=>'U0E=', //SA
                                'key'=>'U3dhdEAxMjM0IQ==',//Swat@1234!
                                'host'=>'MTcyLjE2LjAuMTQ3',//172.16.0.147
                                'db'=>'RGlzdHJpY3RDYXNlTWFuYWdlbWVudA=='//DistrictCaseManagement
                                );
    }//