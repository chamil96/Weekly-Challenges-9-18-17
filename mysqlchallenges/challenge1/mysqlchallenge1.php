<?php include("integration.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form class="state_selector" action="index.html" method="post">
        <div>
          <label>States:</label>
        </div>
        <div>
          <select>
            <?php foreach ($list as $states) {
              echo "<option value=$states[states]>$states[states]</option>";
            } ?>
          </select>
        </div>
      </form>
    </div>
  </body>
</html>
