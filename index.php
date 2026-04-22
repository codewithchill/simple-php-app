<?php
  include './env.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='icon' href="<?= $ENV['APP_BASE_PATH'] . '/images/favicon.ico' ?>">
  <title>PHP Portfolio</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 dark:bg-neutral-950 min-h-screen">
  <div id="root">
    <?php
    include "components/nav.php";
    include "components/sidebar.php";
    include "components/form.php";
    include "components/footer.php";
    ?>
  </div>
  <script type="module" src="scripts/main.js"></script>
</body>
</html>