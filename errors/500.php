<?php 
  include_once(__DIR__ . '/../env.php');
  http_response_code(500)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>500 - Internal Server Error</title>
  <link rel='icon' href="<?= $ENV['APP_BASE_PATH'] . '/images/favicon.ico' ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $ENV['APP_BASE_PATH'] . '/errors/error.css' ?>">
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <p>The page you’re looking for doesn’t exist or has been moved.</p>
    <a href="<?= "$ENV[APP_BASE_PATH]/" ?>">Go Home</a>
  </div>
</body>
</html>
