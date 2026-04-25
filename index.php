<?php

declare(strict_types=1);
require_once './env.php';
require_once './utils/log.php';

log_user();
// session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // if (validate_user()) {
  // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='icon' href="<?= $ENV['APP_BASE_PATH'] . $ENV['APP_ASSET_PATH'] . '/images/favicon.ico' ?>">
  <title><?= $ENV['COMPANY_NAME'] ?></title>
  <link rel="stylesheet"
    href="<?= $ENV['APP_BASE_PATH'] . $ENV['APP_ASSET_PATH'] ?>scripts/style.css">
</head>

<body class="bg-slate-100 dark:bg-neutral-950 min-h-screen">
  <div id="root">
    <?php
    include "components/nav.php";
    include "components/hero.php";
    include "components/footer.php";
    ?>
    <script type="module" src="<?= $ENV['APP_BASE_PATH'] . $ENV['APP_ASSET_PATH'] . 'scripts/main.js' ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1"></script>
  </div>
</body>

</html>