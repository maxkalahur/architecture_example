<?php

// Connect to database
try {
  $_db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8mb4", "".USER."", "".PASS."");
  $_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo $e->getMessage();
}