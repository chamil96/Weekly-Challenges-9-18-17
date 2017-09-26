<?php include("integration2.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div>
        <h2>Directory</h2>
      </div>
      <form class="product_selector" action="index.html" method="post">
        <div>
          <label>Select a color for list of products:</label>
        </div>
        <div>
          <select>
            <?php foreach ($list as $colors) {
              echo "<option value=$colors[color]>$colors[color]</option>";
            } ?>
          </select>
        </div>
        <div class="button">
          <button type="submit" name="button">Submit</button>
        </div>
        <div class="list">
          <ul>
            
          </ul>
        </div>
      </form>
    </div>
  </body>
</html>
