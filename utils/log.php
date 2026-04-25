<?php declare(strict_types=1);
require_once './env.php';

function log_user() {
  global $ENV;

  $time = gmdate("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);
  $txt = "{$_SERVER['REQUEST_METHOD']} | ".
          "{$_SERVER['REMOTE_ADDR']}:{$_SERVER['REMOTE_PORT']} | ".
          "{$_SERVER['REQUEST_URI']} | $time | {$_SERVER['HTTP_USER_AGENT']}\n";
  
  $dir_name = $ENV['LOG_DIR'] . DIRECTORY_SEPARATOR . date('Y');
  if (!is_dir($dir_name)) {
    mkdir($dir_name, 0755, true);
  }

  $file_name = $dir_name . DIRECTORY_SEPARATOR . strtolower(date('F')) . '.log';
  $file = fopen($file_name, "a") or die("Error: Unable to open file!");
  fwrite($file, $txt);
  fclose($file);
}
?>