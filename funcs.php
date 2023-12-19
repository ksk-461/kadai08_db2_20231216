<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
  }
  
function db_conn(){
  try {
      $db_name = 'dsc_db';
      $db_id   = 'root';
      $db_pw   = '';
      $db_host = 'localhost';
      return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
  } catch (PDOException $e) {
      exit('DB Connection Error:' . $e->getMessage());
  }
}

function n($num){
  return number_format($num);
}