<?php
$thisPage = $_SERVER['PHP_SELF'];

$name = isset($_GET['name']) ? $name = htmlentities($_GET['name']) : null;
$fontColor = isset($_GET['fontColor']) ? $fontColor = htmlentities($_GET['fontColor']) : "black";
$bgCol = isset($_GET['bgColor']) ? $bgCol = htmlentities($_GET['bgColor']) : "white";

if($bgCol == "black" && $fontColor == "black" ){
  $fontColor = "pink";
}

if($bgCol == "white" && $fontColor == "white" ){
  $fontColor = "pink";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>MyWBS</title>
  <style media="screen">

  li{
    list-style: none;
  }

  #rot45{
    transform: rotate(45deg);
  }

  #rot90{
    transform: rotate(135deg);
  }

  * {
    box-sizing: border-box;
  }

  input[type=submit] {
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: #ffAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #ffa049;
  }

  .flower{
    border: solid black 2px;
    padding:15px;
    border-radius:5px;
    margin-top: 20px;

  }

  .fontBG{
    margin-top: 20px;
    color: <?php echo $fontColor; ?>;
    background-color: <?php echo $bgCol; ?>;
    border-radius: 5px;

  }

  </style>
</head>
<body>

  <?php
  $typeOf = "LOUSY";
  include "hdr2.html" ?>

  <div class="container flower">

    <h5>Jani's flower</h5>

    <form id="flowerDiv" action="<?php $thisPage?>" method="POST">
      <ul>
        <li>
          <label><strong>Center</strong></label><br>
          Fill: <input type="color" name="center" value="#ffffff"> Outline: <input type="color" name="centerColorStroke" value="#ffffff"> Thickness: <input type="range" name="centerStroke" value="2" min="0" max="17" >
        </li>
        <li>
          <label><strong>Petals</strong></label><br>
          Fill: <input type="color" name="petals" value="#ffffff"> Outline: <input type="color" name="petalsColorStroke" value="#ffffff"> Thickness: <input type="range" name="petalsStroke" value="2" min="0" max="15" >
        </li>
        <li>
          <label><strong>Stem</strong></label><br>
          Fill: <input type="color" name="stem" value="#ffffff"> Thickness: <input type="range" name="stemWidth" value="" min="1" max="20" step="1">
        </li>
      </ul>

      <input type="submit" name="flowerSubmit" value="GENERATE FLOWER">


    </form>

    <?php

    //Center
    $center = isset($_POST['center']) ? $center = $_POST['center'] : "white";
    $centerColorStroke = isset($_POST['centerColorStroke']) ? $centerColorStroke = $_POST['centerColorStroke'] : "white";
    $centerStroke = isset($_POST['centerStroke']) ? $centerStroke = $_POST['centerStroke'] : 2;

    //Petals
    $petals = isset($_POST['petals']) ? $petals = $_POST['petals'] : "white";
    $petalsColorStroke = isset($_POST['petalsColorStroke']) ? $petalsColorStroke = $_POST['petalsColorStroke'] : "white";
    $petalsStroke = isset($_POST['petalsStroke']) ? $petalsStroke = $_POST['petalsStroke'] : 2;


    //Stem
    $stem = isset($_POST['stem']) ? $stem = $_POST['stem'] : "white";
    $stemWidth = isset($_POST['stemWidth']) ? $stemWidth = $_POST['stemWidth'] : 2;

    ?>


    <svg width="600" height="450" version="1.1" xmlns="http://www.w3.org/2000/svg">

      //Stem
      <line x1="270" x2="270" y1="150" y2="350" stroke="<?php echo $stem; ?>" stroke-width="<?php echo $stemWidth; ?>"/>

        //Petals
        <ellipse cx="220" cy="150" rx="30" ry="10" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>
          <ellipse cx="320" cy="150" rx="30" ry="10" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>

            <ellipse cx="270" cy="100" rx="10" ry="30" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>
              <ellipse cx="270" cy="200" rx="10" ry="30" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>

                <ellipse id="rot45" cx="300" cy="-40" rx="10" ry="30" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>
                  <ellipse id="rot45" cx="300" cy="-130" rx="10" ry="30" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>

                    <ellipse id="rot90" cx="-85" cy="-245" rx="10" ry="30" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>
                      <ellipse id="rot90" cx="-83" cy="-345" rx="10" ry="30" stroke="<?php echo $petalsColorStroke; ?>" fill="<?php echo $petals; ?>" stroke-width="<?php echo $petalsStroke; ?>"/>

                        <circle cx="270" cy="150" r="30" stroke="<?php echo $centerColorStroke; ?>" fill="<?php echo $center; ?>" stroke-width="<?php echo $centerStroke; ?>"/>
                        </svg>
                      </div>
                      <div class="container fontBG">
                        <form method="GET" action="<?php $thisPage ?>">
                          <div>
                            <label><strong>Font color:</strong></label> <input type="color" name="fontColor">
                          </div>
                          <br>
                          <label>Cange Background color</label><br>
                          <select name="bgColor" id="bgColor">
                            <option value="white">White</option>
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                            <option value="black">Black</option>
                          </select>
                          <br>
                          <input type="submit" value="Change Color">
                        </form>
                        <div>
                          <p>You picked FONT color: <span id="clrName"><?php echo $fontColor ?></span> </p>
                          <p>You picked BACKGROUND color: <span id="clrName"><?php echo $bgCol ?></span> </p>
                        </div>
                        <div>
                          <ul>
                            <li>
                              <a href="get_post.php?name=Jack"><p>Jack Log in</p></a>
                            </li>
                            <li>
                              <a href="get_post.php?name=Stacy"><p>Stacy Log in</p></a>
                            </li>
                          </ul>
                        </div>

                        <?php
                        if(isset($name)){
                          echo "<p>{$name}'s Profile</p>";
                        }else{
                          echo "<p>User not logged in</p>";
                        }
                        ?>

                      </div>

                    </body>
                    </html>
