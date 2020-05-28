<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  //Fonts
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

  //Style
  <link rel="stylesheet" type="text/css" href="pageStyle.css">
  <title>PHP Playground</title>
</head>
<body>
  <?php include "header.html" ?>
  <div class="block1">
    <h5>00) Variables</h5>

    <p class="codeOutput">CODE</p>
    <p class="code">

      $charName = "Pajo";<br>
      $charAge = 50;<br>
      <br>
      echo "There once was a man named $charName&lt;br&gt;";<br>
      echo "He was $charAge years old &lt;br&gt;";<br>
      $charName = "Jajo";<br>
      echo "He really liked the name $charName (var name changed)&lt;br&gt;";<br>
      $charAge = 30;<br>
      echo "But didn't like being $charAge (var age changed)"; <br>

    </p>
    <br>
    <p class="codeOutput">OUTPUT</p>
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

    <p class="codeOutput">CODE</p>
    <p class="code">

      $myString = "\"BIG LETTERS IN PHP\"";<br>
      $chars = "aeiou";<br>
      <br>
      echo strtolower($myString) . " using \"echo strtolower(\$myString)\"&lt;br&gt;&lt;br&gt;";<br>
      <br>
      echo "STRING LENGTH: strlen(\$myString)&lt;br&gt;";<br>
      echo "Following string ($chars) has ".strlen($chars)." characters&lt;br&gt;&lt;br&gt;";<br>
      <br>
      echo "Getting first char using variable name + index (\$varName[0])&lt;br&gt;";<br>
      echo "Third letter from myString: ";<br>
      echo $myString[3]." "."( from ".$myString." )&lt;br&gt;&lt;br&gt;";<br>
      echo "reassign first letter using \myString[0] = F&lt;br&gt;";<br>
      $myString[1] = "F";<br>
      echo $myString."&lt;br&gt;&lt;br&gt;";<br>
      <br>
      echo "REPLACE: ";<br>
      echo str_replace("FIG","small",$myString)."&lt;br&gt;&lt;br&gt;";<br>
      echo "using str_replace(\"FIG\",\"small\",\$myString)&lt;br&gt;&lt;br&gt;";<br>
      <br>
      echo "SUBSTRING: ";<br>
      echo substr($myString, 1, 4)." (myString, 0, 3)&lt;br&gt;";<br>
      echo "using substr(\$myString, start index, end index)";<br>

    </p>
    <br>
    <p class="codeOutput">OUTPUT</p>
    <div class="output">

      <?php
      $myString = "\"BIG LETTERS IN PHP\"";
      $chars = "aeiou";

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
  </div>

  <div class="block1">
    <h5>02) Working with Numbers</h5>

    <?php
    echo "abs(-100) &nbsp&nbsp&nbsp&nbsp pow(2,4) &nbsp&nbsp&nbsp&nbsp  sqrt(64) &nbsp&nbsp&nbsp&nbsp  max(5,15) same as in Java<br>";
    echo "abs:".abs(-100)." pow: ".pow(2,4)." sqrt: ". sqrt(64)." max: ". max(5,15)." min: ". min(5,15)."<br><br>";
    ?>
    <p class="codeOutput">CODE</p>
    <p class="code">
      $myDec = 44.77;<br><br>
      echo "Ceil: ". ceil($myDec)."&lt;br&gt;";<br>
      echo "Floor: ". floor($myDec)."&lt;br&gt;";<br>
      echo "Round: ". round($myDec)."&lt;br&gt;";
    </p><br>

    <p class="codeOutput">OUTPUT</p>

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

    <p class="codeOutput">CODE</p>
    <p class="code">

      &lt;input type="text" name="usernameInput" placeholder="username" size="7"&gt;<br>
      &nbsp;&nbsp; &lt;?php echo "input: " .$_GET["usernameInput"] ;  ?&gt;<br><br>
      &nbsp;&nbsp;&lt;input type="password" name="passwordInput" placeholder="password" size="7"&gt;<br>
      &lt;?php echo "input: ".$_GET["passwordInput"]; ?&gt;

    </p><br>

    <p class="codeOutput">OUTPUT</p>
    <div class="output">

      <form action="site.php" method="get">
        <input type="text" name="usernameInput" placeholder="username" size="7"> <?php echo "input: " .$_GET["usernameInput"] ;  ?><br><br>
        <input type="password" name="passwordInput" placeholder="password" size="7"> <?php echo "input: ".$_GET["passwordInput"]; ?>  <br><br>
        <button>LOGIN</button>
        <button type="reset">CLEAR</button>
      </form>
    </div>
  </div>
  <div class="block1">
    <h5>04) Building a simple Calculator with PHP</h5>

    <p class="codeOutput">CODE</p>
    <p class="code">
      echo $_GET["firstNumCalc"] + $_GET["secondNumCalc"];<br>
      <br>
      &lt;form action="site.php" method="get"&gt;<br>
      &nbsp;&nbsp; &lt;input type="number" name="firstNumCalc"  min="0" max="999999" &gt;<br>
      &nbsp;&nbsp;&lt;input type="number" name="secondNumCalc" min="0" max="999999"&gt;&nbsp <br>
      &nbsp;&nbsp;&lt;button type="submit"&gt; CALC &lt;/button&gt;<br>
      &lt;/form&gt;
    </p><br>

    <p class="codeOutput">OUTPUT</p>

    <div class="output">

      <form action="site.php" method="get">
        <input type="number" name="firstNumCalc"  min="0" max="999999" ><br><br>
        <input type="number" name="secondNumCalc" min="0" max="999999">&nbsp <button type="submit"> CALC </button><br><br>
        <br>
        <div class="output">
          Result: <?php echo $_GET["firstNumCalc"] + $_GET["secondNumCalc"]; ?>

        </div>
      </form>
    </div>

  </div>
  <div class="block2">
    <h5>05) Mad lib PHP</h5>

    <p class="codeOutput">CODE</p>
    <p class="code">


      &lt;form  action="site.php" method="get"&gt;<br>
      &nbsp;&nbsp; Color: &lt;input type="text" name="MLcolor" size="7"&gt;<br>
      &nbsp;&nbsp; Plural Noun: &lt;input type="text" name="MLpluralNoun" size="7"&gt;<br>
      &nbsp;&nbsp; Celebrity: &lt;input type="text" name="MLcelebrity" size="7"&gt;<br>
      &nbsp;&nbsp;  &lt;button type="submit">SUBMIT&lt;/button&gt;<br>
      &lt;/form&gt;<br>
      <br>
      &lt;?php <br>
      <br>
      $color = $_GET["MLcolor"];<br>
      $pluralNoun  = $_GET["MLpluralNoun"];<br>
      $celebrity = $_GET["MLcelebrity"];<br>
      <br>
      echo "Roses are &lt;span style=\"font-weight:600\"&gt;$color&lt;/span&gt;";<br>
      echo "&lt;span style=\"font-weight:600\">$pluralNoun&lt;/span&gt; are blue";<br>
      echo "I love &lt;span style=\"font-weight:600\"&gt;$celebrity&lt;/span&gt;";<br>
      ?&gt;

    </p><br>

    <p class="codeOutput">OUTPUT</p>
    <div class="output">

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
  </div>

  <div class="block1">
    <h5>06) URL parameters - GET/POST</h5>

    <p>Username with GET:</p>
    <p class="codeOutput">CODE</p>

    <p class="code">

      &lt;form action="site.php" method="get"&gt;<br>
      &nbsp;&nbsp;Name: &lt;input type="text" name="urlName"&gt; <br>
      &nbsp;&nbsp;&lt;button type="submit">SUBMIT&lt;/button &gt; <br>
      &lt;/form&gt;<br>
      <br>
      &lt;?php<br>
      &nbsp;&nbsp;echo $_GET["urlName"]."  (shows up on URL)";<br>
      ?&gt;<br>
    </p>
    <br>
    <p class="codeOutput">OUTPUT</p>

    <div class="output">

      <form action="site.php" method="get">
        Name: <input type="text" name="urlName"> <br><br>
        <button type="submit">SUBMIT</button><br><br>
      </form>

      <?php
      echo $_GET["urlName"]."  (shows up on URL)";
      ?>
    </div>

    <br><br><br>
    <p>Password with POST:</p>

    <p class="codeOutput">CODE</p>

    <p class="code">

      &lt;form action="site.php" method="POST"&gt;<br>
      &nbsp;&nbsp;&lt;input type="password" name="postPassword"&gt;<br>
      &nbsp;&nbsp;&lt;button type="submit"&gt;SUBMIT&lt;/button&gt;<br>
      &lt;/form&gt;<br>
      <br>
      &lt;?php  echo $_POST["postPassword"];  ?&gt;<br>
    </p>

    <p class="codeOutput">OUTPUT</p>
    <div class="output">

      <form action="site.php" method="POST">
        <input type="password" name="postPassword"><br>
        <button type="submit">SUBMIT</button>
      </form>

      <?php  echo $_POST["postPassword"]."<br>";
      echo $_POST["urlName"].'doesnt show up in URL bar)';

      ?>

    </div>


  </div>

  <div class="block2">
    <h5>07) Arrays </h5>

    <p class="codeOutput">CODE</p>
    <p class="code">

      $friends = array("Kevin", "Karen", "Oscar","Jim", 15, false);<br><br>

      //change array element<br>
      $friends[1] = "notKaren";<br>
      echo $friends[1]<br><br>
      //Array Length:<br>
      echo "Elements inside array: ".count($friends);<br><br>


    </p><br>

    <p class="codeOutput">OUTPUT</p>
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

    <p class="codeOutput">CODE</p>
    <p class="code">

      &lt;form action="site.php" method="post"&gt;<br>
      &nbsp;&nbsp;Apples &lt;input type="checkbox" name="fruits[]" value="apples"&gt;<br>
      &nbsp;&nbsp;Oranges &lt;input type="checkbox" name="fruits[]" value="oranges"&gt;<br>
      &nbsp;&nbsp;Pears &lt;input type="checkbox" name="fruits[]" value="pears"&gt;<br>
      &nbsp;&nbsp;Bananas &lt;input type="checkbox" name="fruits[]" value="bananas"&gt;<br>
      &nbsp;&nbsp;Lemons &lt;input type="checkbox" name="fruits[]" value="lemons"&gt;<br>
      &nbsp;&lt;button type="submit">SEND&lt;/button&gt;<br>
      &lt;/form&gt;<br>
      <br>

      &lt;?php <br>
      $fruits = $_POST["fruits"];<br>
      echo $fruits[0].", ".$fruits[1];<br>
      <br>
      <br>
      for ($i=0; $i < count($fruits); $i++) {<br>
        echo "$fruits[$i] ";<br>
      }<br>
      ?&gt;<br>
    </p>


    <p class="codeOutput">OUTPUT</p>

    <div class="output">

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

        for ($i=0; $i < count($fruits); $i++) {
          echo "$fruits[$i] ";
        }
        ?>
      </div>
    </div>
  </div>

  <div class="block2">
    <p style="text-align:center;font-size:20px;"><a href="site2.php">NEXT PAGE =></a></p>
  </div>

  <?php include "footer.html" ?>



</body>
</html>
