<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <title></title>
  <style>


    body{
      color: white;
      font-family: 'Roboto', sans-serif;
    }

    h1 { text-align:center; color: #BDB76B }
    h5{ font-size: 20px; margin-left: 50px;}
    input{ font-size:14px; }

    .blank{
      display: none;
    }

    .output{
      font-family: consolas;
      background-color:#BDB76B;
      color:black;
      font-size:15px;
      padding: 10px;
      display: inline-block;
    }

    .block1{
      background-color: rgb(60, 60, 60);
      padding: 10px;

    }
    .block2{
      background-color: rgb(60, 70, 60);
      padding: 10px;

    }

  </style>
</head>
<body>
  <h1>PHP playground</h1>
  <div class="blank">


  <div class="block2">
    <p style="text-align:center;font-size:20px;"><a style="color:white;text-decoration:none" href="site.php"><= BACK</a></p>
  </div>

  <div class="block1">
    <h5>09) Associative Arrays (key:value)</h5>

    <p>$grades = array('Jim' => "A", "John" => "B-", "Pam" => "F", "Oscar" => "C+"); <br> <br>

      echo $grades["Jim"]." ".$grades["Oscar"]; <br><br>
      Output: </p>
      <div class="output">
        <?php

        $grades = array('Jim' => "A", "John" => "B-", "Pam" => "F", "Oscar" => "C+");
        $grades["Pam"] = "A";
        echo $grades["Jim"]." ".$grades["Oscar"];

        ?>
      </div>
      <br><br>

      <form action="site2.php" method="post">
        <input type="text" name="studentName">
        <button type="submit">Get Grade</button>
      </form>

      <div class="output">
        <?php
        $shortVar = $_POST["studentName"];
        echo $shortVar." grade: ".$grades[$shortVar];
        ?>
      </div>
    </div>
    <div class="block2">
      <h5>10) Functions</h5>

      <p>
        function sayHi($name, $age){<br>
          echo "Hello $name , you are $age years old";<br>
        }<br><br>
        <br>
        sayHi("Test",45);<br>
        sayHi("Name",13);<br>
        sayHi("John",60);<br>
        sayHi("Mike",44);<br>
      </p>

      <div class="output">
        <?php
        function sayHi($name, $age){
          echo "Hello $name , you are $age years old<br>";
        }
        sayHi("Test",45);
        sayHi("Name",13);
        sayHi("John",60);
        sayHi("Mike",44);
        ?>
      </div>

    </div>
    <div class="block1">
      <h5>11)Return function</h5>


      <p><strong>//Get user input using</strong> <br>

        $userInputNum = $_POST["num3"];<br><br>

        <strong>//decalre functions multi3</strong><br>
      function multi3($num){<br>
        Return pow($num,3);<br>
      }<br><br>
      <strong>return result</strong><br>
      echo multi3($userInputNum);<br><br>

      ?></p>
      <br>
      <form action="site2.php" method="post">
        <input type="number" name="num3"><br>
        <button type="submit">Triple</button><br>
      </form>
<div class="output">


      <?php
      $userInputNum = $_POST["num3"];

      function multi3($num){
        echo "Result: ";
        Return pow($num,3);
      }
      $res = multi3($userInputNum);
      echo $res;

      ?>

    </div>

    </div>
  </div>

    <div class="block2">
      <h5>12) If/else statements</h5>

      <?php

      $isMale = false;
      $isTall = true;

      if($isMale && $isTall){
        echo "You are a tall male";
      } elseif ($isMale && !$isTall) {
        echo "You are a short male";
      }
        elseif (!$isMale && $isTall) {
          echo "You are not male but are tall";
        }
      else {
        echo "You are not male";
      }

       ?>
    </div>


    <div class="block1">
      <p style="text-align:center;font-size:20px;"><a style="color:white;text-decoration:none" href="site3.php">NEXT PAGE =></a></p>
    </div>


  </body>
  </html>
