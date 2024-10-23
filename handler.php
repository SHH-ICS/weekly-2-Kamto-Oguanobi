<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Area & Circumference Calculator</title>
</head>

<body>

  <div cl<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area & Circumference Calculator</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content" style="text-align: center; margin-top: 50px;">


        <?php
        if (isset($_POST['radius']) && is_numeric($_POST['radius'])) {
          $radius = floatval($_POST['radius']);
          $area = round(pi() * $radius * $radius, 2);
          $circumference = round(2 * pi() * $radius, 2);
          echo "<p>Area: $area square units</p>";
          echo "<p>Circumference: $circumference units</p>";
        }
        ?>
      </div>
    </main>
  </div>
</body>

</html>