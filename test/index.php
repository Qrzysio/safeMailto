<?php require '../src/safeMailto.function.php';?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>safe_mailto() test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
          <h1>safe_mailto() Test</h1>
          <p><?php echo safe_mailto("contact@domain.com"); ?></p>
          <p><?php echo safe_mailto("contact@domain.com", "Contact us"); ?></p>
          <p><?php echo safe_mailto("contact@domain.com", "Contact us", ["class" => "text-danger", "data-target" => "#lightbox"]); ?></p>
          <p><?php echo safe_mailto("contact@domain.com", "Contact us", 'style="font-size:2em;"'); ?></p>
          <hr>
          <p>PHP <?php echo phpversion(); ?></p>
        </div>
    </div>
</div>
</body>
</html>
