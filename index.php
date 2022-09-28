<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Color generator</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="root">
    <h2>Nuances de gris</h2>
    <div class="boxes">
      <?php
      for ($num = 0; $num < 16; $num++) {
        $convertNum = dechex($num);
        for ($i = 1; $i < 4; $i++) {
          $color = str_repeat($convertNum, $i);
        } ?>

        <div class="box" style="background-color:#<?= $color ?>">
        </div>

        <?php
      }
      ?>
    </div>
    <h2>Toutes les couleurs</h2>
    <div class="boxes">
      <?php
      for ($num1 = 0; $num1 < 16; $num1++) {
        for ($num2 = 0; $num2 < 16; $num2++) {
          for ($num3 = 0; $num3 < 16; $num3++) {
            $convertNum1 = dechex($num1);
            $convertNum2 = dechex($num2);
            $convertNum3 = dechex($num3);
            $color = $convertNum1 . $convertNum2 . $convertNum3;
            ?>

            <div class="box" style="background-color:#<?= $color ?>">
            </div>

            <?php
          }
        }
      }
      ?>
    </div>
  </div>
</body>

</html>