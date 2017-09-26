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
      <form class="product_selector" action="mysqlchallenge2.php" method="GET">
        <div>
          <label>Select a color for list of products:</label>
        </div>
        <div>
          <select name = "color_option">
            <option value="black">black</option>
            <option value="brown">brown</option>
            <option value="white">white</option>
            <option value="blue">blue</option>
            <option value="purple">purple</option>
          </select>
        </div>
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
      <div>
        <?php
          if (!empty($_GET)) {
            try {
              $db = new PDO("mysql:host=localhost;dbname=chamilton;port=8888", "r2hstudent", "SbFaGzNgGIE8kfP");

              //ERROR Message
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $select = "SELECT name, description, price FROM products WHERE color = :colors";

              //use prepare to prep statement for execution
              $prep = $db->prepare($select);
              $prep->bindParam(':colors', $_GET['color_option']);

              $prep->execute();

              foreach ($prep->fetchALL() as $color) {
                echo "<p>{$color[name]}, {$color[description]}, {$color[price]}</p>";
              }
            } catch (Exception $e) {
              echo $e->getMessage();
              exit;
            }
          }
        ?>
      </div>
    </div>
  </body>
</html>
