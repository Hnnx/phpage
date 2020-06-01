<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/pageStyle.css">
  <title>PHP Playground</title>
</head>
<body>
    <?php

  $partNum = 2;
  $partTitle = "Arrays, Loops, Functions";

  include "inc/header.html"
  ?>

  <div class="block1">
    <h5>09) Associative Arrays (key:value)</h5>

    <p class="codeOutput">CODE</p>

    <p class="code">
      $grades = array('Jim' => "A", "John" => "B-", "Pam" => "F", "Oscar" => "C+"); <br>
      echo $grades["Jim"]." ".$grades["Oscar"]; <br>
    </p>
    <br>
    <p class="codeOutput">OUTPUT</p>
    <div class="output">
      <?php

      $grades = array('Jim' => "A", "John" => "B-", "Pam" => "F", "Oscar" => "C+");
      $grades["Pam"] = "A";
      echo $grades["Jim"]." ".$grades["Oscar"];

      ?>
    </div>

    <p class="codeOutput">CODE</p>
    <p class="code">

      &lt;form action="site2.php" method="post"&gt;<br>
      &nbsp;&nbsp;&lt;input type="text" name="studentName"&gt;<br>
      &nbsp;&nbsp;&lt;button type="submit">Get Grade&lt;/button&gt;<br>
      &lt;/form&gt;<br>
      <br>
      &lt;?php <br>
      &nbsp;&nbsp;$shortVar = $_POST["studentName"];<br>
      &nbsp;&nbsp;echo $shortVar." grade: ".$grades[$shortVar];<br>
      ?&gt;

    </p>

    <p class="codeOutput">OUTPUT</p>
    <div class="output">



      <form action="site2.php" method="post">
        Insert name: <input type="text" name="studentName">
        <button type="submit">Get Grade</button>
      </form>

      <?php
      $shortVar = $_POST["studentName"];
      echo $shortVar." grade: ".$grades[$shortVar];
      ?>
    </div>
  </div>
  <div class="block2">
    <h5>10) Functions</h5>

    <p class="codeOutput">CODE</p>
    <p class="code">
      function sayHi($name, $age){<br>
        &nbsp;echo "Hello $name , you are $age years old";<br>
      }<br><br>
      <br>
      sayHi("Test",45);<br>
      sayHi("Name",13);<br>
      sayHi("John",60);<br>
      sayHi("Mike",44);<br>
    </p><br>

    <p class="codeOutput">OUTPUT</p>


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
    <h5>11) Return function</h5>


    <p class="code"><strong>//Get user input using</strong> <br>

      $userInputNum = $_POST["num3"];<br><br>

      <strong>//decalre functions multi3</strong><br>
      function multi3($num){<br>
        Return pow($num,3);<br>
      }<br><br>
      <strong>//return result</strong><br>
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

    <div class="block2">
      <h5>12) If/else statements</h5>
      <p><strong>Short/Male if/else</strong></p>

      <p class="code">    $isMale = false;<br>
        $isTall = true;<br>
        <br>
        if($isMale && $isTall){<br>
          echo "You are a tall male";<br>
        } elseif ($isMale && !$isTall) {<br>
          echo "You are a short male";<br>
        }<br><br>
        elseif (!$isMale && $isTall) {<br>
          echo "You are not male but are tall";<br>
        }<br><br>
        else {<br>
          echo "You are not male";<br>
        }</p><br>

        <div class="output">

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


      </div>

      <div class="block1">
        <p><strong>Get max number </strong></p>

        <p class="code">

          $num1 = $_GET["num1"];<br>
          $num2 = $_GET["num2"];<br>
          $num3 = $_GET["num3"];<br>
          <br><br>
          function getMax($fNum, $sNum, $tNum){<br>
            <br>
            if($fNum > $sNum && $fNum > $tNum){<br>
              return $fNum;<br>
            }<br>
            elseif ($sNum > $fNum && $sNum > $tNum) {<br>
              return $sNum;<br>
            } else{<br>
              return $tNum;<br>
            }<br>
          }<br>

          echo getMax($num1, $num2, $num3);<br>
          ?><br>

        </p>



        <form action="site2.php" method="GET">
          Input 3 numbers:<br>
          <input type="number" name="num1" min="0" max="999999"><input type="number" name="num2" min="0" max="999999"><input type="number" name="num3" min="0" max="999999">
          <button type="submit" name="button">MAX</button>
        </form><br>
        <div class="output">
          <?php

          $num1 = $_GET["num1"];
          $num2 = $_GET["num2"];
          $num3 = $_GET["num3"];

          function getMax($fNum, $sNum, $tNum){

            if($fNum > $sNum && $fNum > $tNum){
              return $fNum;
            }
            elseif ($sNum > $fNum && $sNum > $tNum) {
              return $sNum;
            } else{
              return $tNum;
            }
          }

          echo getMax($num1, $num2, $num3);
          ?>

        </div>
      </div>
      <div class="block2">
        <h5>13) Calculator 2.0</h5>

        <p>using type="number" and step="0.001" to accept decimal </p>

        <p class="code">


          if( $op == "plus" || $op == "+"){<br>
            echo $num1 + $num2;<br>
          } else if($op == "minus" || $op == "-"){<br>
            echo $num1 - $num2;<br>
          } else if($op == "multiply" || $op == "*"){<br>
            echo $num1 * $num2;<br>
          } else if($op == "divide" || $op == "/"){<br>
            echo $num1 / $num2;<br>
          } else if($op == "remainder" || $op == "%"){<br>
            echo $num1 % $num2;<br>
          } else {<br>
            echo "select an operand";<br>
          }

        </p>

        <form action="site2.php" method="GET">
          <input type="number" step="0.001" name="calcNum1" min="0" max="999">
          <select name="operands">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
          </select>
          <input type="number" step="0.001" name="calcNum2" min="0" max="999">
          <button type="submit">CALC</button>
        </form>

        <div class="output">
          <?php

          $num1 = $_GET["calcNum1"];
          $num2 = $_GET["calcNum2"];
          $op =  $_GET["operands"];


          if( $op == "plus" || $op == "+"){
            echo $num1 + $num2;
          } else if($op == "minus" || $op == "-"){
            echo $num1 - $num2;
          } else if($op == "multiply" || $op == "*"){
            echo $num1 * $num2;
          } else if($op == "divide" || $op == "/"){
            echo $num1 / $num2;
          } else if($op == "remainder" || $op == "%"){
            echo $num1 % $num2;
          } else {
            echo "select an operand";
          }

          ?>
        </div>

      </div>


    </div>
    <div class="block1">
      <h5>14) Switch case</h5>

      <p class="code">

        $grade = $_GET["grade"];<br>
        <br>
        switch($grade){<br>
          <br>
          case "A+":<br>
          echo "You did great!";<br>
          break;<br>
          case "A":<br>
          echo "You did very good";<br>
          break;<br>
          case "B":<br>
          echo "You did good";<br>
          break;<br>
          case "C":<br>
          echo "You did ok";<br>
          break;<br>
          case "D":<br>
          echo "You didn't do good";<br>
          break;<br>
          case "F":<br>
          echo "You failed :(";<br>
          break;<br>
          default:<br>
          echo "Please enter A+,A,B,C,D or F";<br>
        }</p>

        <p><strong>What was your grade?</strong></p>
        <p>Option 1: Using Input Tag</p>

        <form action="site2.php" method="GET">
          <input type="text" name="grade" size="2"> <button type="submit">Submit</button>
        </form> <br>


        <div class="output">
          <?php

          $grade = $_GET["grade"];

          switch($grade){

            case "A+":
            echo "You did great!";
            break;
            case "A":
            echo "You did very good";
            break;
            case "B":
            echo "You did good";
            break;
            case "C":
            echo "You did ok";
            break;
            case "D":
            echo "You didn't do good";
            break;
            case "F":
            echo "You failed :(";
            break;
            default:
            echo "Please enter A+,A,B,C,D or F";
          }
          ?>
        </div>

        <p>Option 2: Using select Tag</p>
        <form action="site2.php" method="GET">
          <select name="grd">
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
          <button type="submit">Submit</button>
        </form>

        <div class="output">

          <?php

          $grade = $_GET["grd"];

          switch($grade){

            case "A+":
            echo "You did great!";
            break;
            case "A":
            echo "You did very good";
            break;
            case "B":
            echo "You did good";
            break;
            case "C":
            echo "You did ok";
            break;
            case "D":
            echo "You didn't do good";
            break;
            case "F":
            echo "You failed :(";
            break;
            default:
            echo "Please enter A+,A,B,C,D or F";
          }

          ?>
        </div>
      </div>

      <div class="block2">
        <h5>15) Basic Loops</h5>

        <h3>WHILE</h3>
        <p class="code">
          $index = 1;<br>
          while($index <= 4 ){<br>
            echo $index.") String  &lt;br&gt; ";<br>
            $index++;<br>
          }

        </p><br>

        <div class="output">
          <?php
          $index = 1;
          while($index <= 4 ){
            echo "$index) String  <br>";
            $index++;
          }
          ?>

        </div>
        <br>
        <h3>FOR</h3>
        <p class="code">  for ($i=0; $i < 15; $i++) {<br>
          echo "$i ";</p>
          <br>
          <div class="output">
            <?php
            for ($i=0; $i < 15; $i++) {
              echo "$i ";
            }

            ?>
          </div>

          <h3>ARRAY LOOP</h3>

          <p class="code">
            $randomNums = array(4,23,6,4,8,1,9,12,99,123);<br>
            <br>
            for ($i=0; $i < count($randomNums); $i++) {<br>
              echo "$randomNums[$i] ";<br>
            }<br><br>
            for ($i=count($randomNums) ; $i > 0; $i-- ) {<br>
              echo "$randomNums[$i] ";<br>
            }<br>
            <br>
            for ($i=0; $i < count($randomNums) ; $i+=2) {<br>
              echo "$randomNums[$i] ";<br>
            }</p><br>

            <div class="output">

              <?php

              $randomNums = array(4,23,6,4,8,1,9,12,99,123);

              for ($i=0; $i < count($randomNums); $i++) {
                echo "$randomNums[$i] ";
              }
              echo "<p>Reverse Array: <p>";
                for ($i=count($randomNums) ; $i > 0; $i-- ) {
                  echo "$randomNums[$i] ";
                }

                echo "<p>Every 2nd element from Array: <p>";

                  for ($i=0; $i < count($randomNums) ; $i+=2) {
                    echo "$randomNums[$i] ";
                  }
                  ?>

                </div>
              </div>
              <div class="block1">

                <h5>16) Using include</h5>


                <p class="codeOutput">CODE</p>
                <p class="code">

                  //<strong>external file footer.html</strong> <br>
                  <br>
                  &lt;style&gt;<br>
                  &nbsp;&nbsp;footer{<br>
                    &nbsp;&nbsp;color:white;<br>
                    &nbsp;&nbsp;background-color:black;<br>
                    &nbsp;&nbsp;margin:0px;<br>
                    &nbsp;&nbsp;padding:15px;<br>
                    &nbsp;&nbsp;font-family: 'Share Tech Mono', monospace;<br>
                  }<br>
                  #name{transition-duration:.5s;}<br>
                  #name:hover{font-size:25px;}<br>
                  &lt;/style&gt;<br>
                  &lt;footer&gt;<br>
                  &nbsp;&nbsp;&lt;p&gt;Made with &lt;span&gt; <strong>&lt;?php echo "$stuff" ?&gt;</strong> &lt;/span&gt; by &lt;a id="name" href="https://github.com/Hnnx">HNNX&lt;/a&gt;&lt;/p&gt;<br>
                  &lt;/footer&gt;<br><br>
                  <strong>//php include statement</strong><br>
                  &lt;?php <br>
                  $made = "Created";<br>
                  $stuff = "love";<br>
                  date = 2020;<br>
                  include "inc/footer.html"<br>
                  ?&gt;
                </p>

                <p class="codeOutput">OUTPUT</p>
                <div class="output">

                  <?php
                  $made = "Created";
                  $stuff = "<3";
                  $date = 2020;
                  include "inc/footer.html";
                  ?>

                </div>


                <p>Works with functions as well:</p>

                <p class="codeOutput">CODE</p>
                <p class="code">
                  <strong>//function in phpFunc.php</strong><br>
                  &lt;?php <br>
                  function pal($String){<br>
                    $strToArray = str_split($String);<br>
                    <br>
                    for ($i=count($strToArray); $i >= 0; $i--) {<br>
                      &nbsp;&nbsp;echo "$strToArray[$i]";<br>
                      &nbsp;}<br>
                    }<br>
                    ?&gt;<br>
                    <br>
                    <strong>//include in site2.php</strong><br>
                    &lt;?php <br>
                    <br>
                    include "phpFunc.php";<br>
                    pal("ZEMSOOON");<br>
                    ?&gt;<br>
                  </p>
                  <br>
                  <p class="codeOutput">OUTPUT</p>
                  <div class="output">

                    <?php

                    include "inc/phpFunc.php";
                    pal("ZEMSOOON");
                    ?>
                  </div>

                </div>

                <?php
                $blockX = "block1";

                $linkBack = "site.php";
                $linkNext = "class.php";

                $made = "Crafted";
                $stuff = "<3";
                include "inc/footer.html" ?>

              </body>
              </html>
