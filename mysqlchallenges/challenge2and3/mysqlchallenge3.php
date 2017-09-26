<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Stock Update Form</h2>
    <form class="" action="mysqlchallenge3.php" method="POST">
      <label>Item Name:</label><br>
      <input type="text" name="item_name"><br>
      <label>Item Price:</label><br>
      <input type="text" name="item_price"><br>
      <label>Product Description:</label><br>
      <input type="text" name="item_description"><br>
      <label>Color:</label><br>
      <input type="text" name="item_color"><br>
      <input type="submit" value="Submit"><br>
    </form>
    <?php
      if (!empty($_POST)) {
        try {
          $db = new PDO("mysql:host=localhost;dbname=chamilton;port=8888", "r2hstudent", "SbFaGzNgGIE8kfP");
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $insert = 'INSERT INTO products(name, description, price, color) VALUES(:name, :description, :price, :color)';

          $prep = $db->prepare($insert);


          $prep->bindParam(":name", $_POST["item_name"]);
          $prep->bindParam(":description", $_POST["item_description"]);
          $prep->bindParam(":price", $_POST["item_price"]);
          $prep->bindParam(":color", $_POST["item_color"]);
          $prep->execute();

        } catch (Exception $e) {
          echo $e->getMessage();
          exit;
        }

      }
    ?>
  </body>
</html>
