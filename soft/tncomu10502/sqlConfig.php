<?php
if($_SERVER["SERVER_NAME"] == "localhost" or $_SERVER["SERVER_NAME"] == "127.0.0.1"){
  #判斷主機為UniServerZ
  #MYSQL
  #資料庫伺服器
  $db_host = "localhost";
 
  #資料庫使用者帳號
  $db_user = "root";
 
  #資料庫使用者密碼
  #$db_password = "12345";
  $db_password = "111111";
 
  #資料庫名稱
  $db_name = "db105";
 
}else{
  #MYSQL
  #資料庫伺服器
  $db_host = "";
 
  #資料庫使用者帳號
  $db_user = "";
 
  #資料庫使用者密碼
  $db_password = "";
 
  #資料庫名稱
  $db_name = "";
 
}
 
#PHP 5.2.9以後
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
 
if ($mysqli->connect_error) {
  die('無法連上資料庫 (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
 
#設定資料庫語系
$mysqli->set_charset("utf8");