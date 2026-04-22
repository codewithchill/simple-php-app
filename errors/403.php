<?php 
  include_once(__DIR__ . '/../env.php');
  http_response_code(403);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>403 - Request Denied</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='icon' href="<?= $ENV['APP_BASE_PATH'] . '/images/favicon.ico' ?>">
  <link rel="stylesheet" href="<?= $ENV['APP_BASE_PATH'] . '/errors/error.css' ?>">
</head>
<body>
  <div class="container">
    <h1>403</h1>
    <h2>Page Access Denied!</h2>
    <p>The page you are looking for has been restricted. Make sure you have enough permissions if needed. </p>
    <a href="<?= "$ENV[APP_BASE_PATH]/" ?>">Go Home</a>
  </div>
</body>
</html>
