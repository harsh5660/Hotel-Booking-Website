<?php
   $db_name = 'mysql:host=localhost;dbname=hotel_db';
   $db_user_name = 'root';
   $db_user_pass = '';

   $conn = new PDO(dsn: $db_name, username: $db_user_name, password: $db_user_pass);
   function unique_id(): string{
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen(string: $str) - 1;

      for($i = 0; $i < 20; $i++){
         $n = mt_rand(0, $length);
         $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>