<?php
// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "inc/config.php";

  ForceLogin();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow" />

    <title>Page Title</title>

    <base href="/" />
    <!-- UIkit CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css"
    />
  </head>

  <body>
    <div class="uk-section uk-container">
       Dashboard Here. You are sign in as user: <?php echo $_SESSION['user_id']; ?>
    </div>

    <?php require_once "inc/footer.php"; ?>
  </body>
</html>
