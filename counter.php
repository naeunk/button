<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('counter.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   }
   $db->exec('CREATE TABLE IF NOT EXISTS savenum (name TEXT PRIMARY KEY, num INTEGER)');
   $db->exec('INSERT OR IGNORE INTO savenum (name, num) VALUES ("real", 0)');

   if (isset($_POST['count'])) {
      $one = $_POST['count'];
      $result = $db->query('SELECT * from savenum');
      while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $current = $row['num'];
        $one = $one + $current;
      }
      $db->exec('UPDATE savenum SET num = "'.$one.'" where name = "real"');
      $result = $db->query('SELECT * from savenum');
      while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
         echo $row['num'];
      }
   }
   if (isset($_GET['it'])) {
      $what = $_GET['it'];
      $result = $db->query('SELECT * from savenum');
      while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo $row['num'];
      }
   }
?>