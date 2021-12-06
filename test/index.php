<?php require '../src/safeMailto.function.php';?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
