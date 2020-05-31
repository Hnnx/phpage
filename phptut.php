<?php

$fName = "Pajo";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Name: <?php echo $fName." ". $lName; ?></p>
    <form action="phptut.php" method="get">
      <label>Your State: </label>
      <input type="text" name="state"><br>
      <label>Number 1: </label>
      <input type="text" name="num-1"><br>
      <label>Number 2:</label>
      <input type="text" name="num-2"><br>
      <input type="submit" value="submit">
    </form>

    <?php

    if(isset($_GET) && array_key_exists('state', $_GET)){
      $state = $_GET['state'];
      if(isset($state) && !empty($state)){
        echo "You live in " . $state."<br>";
        echo "$fName lives in $state<br>";

      }
    }

     ?>

  </body>
</html>
