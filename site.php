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
    //display: none;
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
  <div class="block2">
    <p style="text-align:center;font-size:20px;"><a style="color:white;text-decoration:none" href="site2.php">NEXT PAGE =></a></p>
  </div>

  <div class="block1">

    <h5>00) Variables</h5>
    <p>  $charName = "Pajo";<br>
      $charAge = 50; </p>

      <div class="output">

        <?php
        $charName = "Pajo";
        $charAge = 50;

        echo "There once was a man named $charName<br>";
        echo "He was $charAge years old <br>";
        $charName = "Jajo";
        echo "He really liked the name $charName (var name changed)<br>";
        $charAge = 30;
        echo "But didn't like being $charAge (var age changed)"; ?>

      </div>
    </div>
    <div class="block2">
      <h5>01) Working with Strings</h5>

      <?php
      $myString = "\"BIG LETTERS IN PHP\"";
      $chars = "aeiou";

      echo $myString." using \"echo \$myString\"<br><br>";
      echo strtolower($myString) . " using \"echo strtolower(\$myString)\"<br><br>";

      echo "STRING LENGTH: strlen(\$myString)<br>";
      echo "Following string ($chars) has ".strlen($chars)." characters<br><br>";

      echo "Getting first char using variable name + index (\$varName[0])<br>";
      echo "Third letter from myString: ";
      echo $myString[3]." "."( from ".$myString." )<br><br>";
      echo "reassign first letter using \myString[0] = F<br>";
      $myString[1] = "F";
      echo $myString."<br><br>";

      echo "REPLACE: ";
      echo str_replace("FIG","small",$myString)."<br><br>";
      echo "using str_replace(\"FIG\",\"small\",\$myString)<br><br>";

      echo "SUBSTRING: ";
      echo substr($myString, 1, 4)." (myString, 0, 3)<br>";
      echo "using substr(\$myString, start index, end index)";
      ?>
    </div>

    <div class="block1">
      <h5>02) Working with Numbers</h5>

      <?php
      echo "abs(-100) &nbsp&nbsp&nbsp&nbsp pow(2,4) &nbsp&nbsp&nbsp&nbsp  sqrt(64) &nbsp&nbsp&nbsp&nbsp  max(5,15) same as in Java<br>";
      echo "abs:".abs(-100)." pow: ".pow(2,4)." sqrt: ". sqrt(64)." max: ". max(5,15)." min: ". min(5,15)."<br><br>";
      ?>
      <p>$myDec = 44.77</p>

      <div class="output">
        <?php
        $myDec = 44.77;
        echo "Ceil: ". ceil($myDec)."<br>";
        echo "Floor: ". floor($myDec)."<br>";
        echo "Round: ". round($myDec)."<br>";
        ?>
      </div>
    </div>

    <div class="block2">
      <h5>03) Getting input from User</h5>

      <form action="site.php" method="get">
        <input type="text" name="usernameInput" placeholder="username" size="7"> <?php echo "input: " .$_GET["usernameInput"] ;  ?><br><br>
        <input type="password" name="passwordInput" placeholder="password" size="7"> <?php echo "input: ".$_GET["passwordInput"]; ?>  <br><br>
        <button>LOGIN</button>
        <button type="reset">CLEAR</button>
      </form>
    </div>
    <div class="block1">
      <h5>04) Building a simple Calculator with PHP</h5>

      <form action="site.php" method="get">
        <input type="number" name="firstNumCalc"  min="0" max="999999" ><br><br>
        <input type="number" name="secondNumCalc" min="0" max="999999">&nbsp <button type="submit"> CALC </button><br><br>
        <br>
        <div class="output">
          Result: <?php echo $_GET["firstNumCalc"] + $_GET["secondNumCalc"]; ?>

        </div>
      </form>

    </div>
    <div class="block2">
      <h5>05) Mad lib PHP</h5>

      <form  action="site.php" method="get">
        Color: <input type="text" name="MLcolor" size="7"><br>
        Plural Noun: <input type="text" name="MLpluralNoun" size="7"> <br>
        Celebrity: <input type="text" name="MLcelebrity" size="7"> <br><br>
        <button type="submit">SUBMIT</button>
      </form>
      <br><br>

      <?php
      $color = $_GET["MLcolor"];
      $pluralNoun  = $_GET["MLpluralNoun"];
      $celebrity = $_GET["MLcelebrity"];

      echo "Roses are <span style=\"font-weight:600\">$color</span> <br>";
      echo "<span style=\"font-weight:600\">$pluralNoun</span> are blue <br>";
      echo "I love <span style=\"font-weight:600\">$celebrity</span> <br>";
      ?>
    </div>

    <div class="block1">
      <h5>06) URL parameters - GET/POST</h5>
      <p>Username with GET:</p>

      <form action="site.php" method="get">
        Name: <input type="text" name="urlName"> <br><br>
        <button type="submit">SUBMIT</button><br><br>
      </form>

      <?php
      echo $_GET["urlName"]."  (shows up on URL)";
      ?>

      <br><br><br>
      <p>Password with POST:</p>

      <form action="site.php" method="POST">
        <input type="password" name="postPassword"><br>
        <button type="submit">SUBMIT</button>
      </form>

      <?php  echo $_POST["postPassword"];  ?>
    </div>

    <div class="block2">
      <h5>07) Arrays </h5>

      <p>
        $friends = array("Kevin", "Karen", "Oscar","Jim", 15, false);<br><br>

        //change array element<br>
        $friends[1] = "notKaren";<br>
        echo $friends[1]<br><br>
        //Array Length:<br>
        echo "Elements inside array: ".count($friends);<br><br>
        Output:
      </p>
      <div class="output">

        <?php
        $friends = array("Kevin", "Karen", "Oscar","Jim", 15, false);

        //change array element
        $friends[1] = "notKaren";
        echo $friends[1]."<br>";
        //Array Length:
        echo "Elements inside array: ".count($friends);
        ?>
      </div>
    </div>

    <div class="block1">
      <h5>08) Using checkboxes - arrays continued </h5>

      <form action="site.php" method="post">

        Apples <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears <input type="checkbox" name="fruits[]" value="pears"><br>
        Bananas <input type="checkbox" name="fruits[]" value="bananas"><br>
        Lemons <input type="checkbox" name="fruits[]" value="lemons"><br><br>
        <button type="submit">SEND</button>
      </form>
      <br><br>
      <div class="output">

        <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0].", ".$fruits[1];
        ?>
      </div>
    </div>

      <div class="block2">
        <p style="text-align:center;font-size:20px;"><a style="color:white;text-decoration:none" href="site2.php">NEXT PAGE =></a></p>
      </div>



    </body>
    </html>
