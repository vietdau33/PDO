<?php

$ds = DIRECTORY_SEPARATOR;
$fileConfig = __DIR__ . $ds . '..' . $ds . '..' . $ds . 'config' . $ds . 'db.php';
if(file_exists($fileConfig)){
    return include $fileConfig;
}

return [
  'host' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'hoangthetai',
  'port' => '3306',
];