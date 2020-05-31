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

  echo "<br><br>";
  $inty = 555;
  $stringy = "stringyCheese";
  $floaty = "5.22";
  $booly = false;
  $arri = array('Key' => "val" , "Key2" => "val2", "key3" => 555 );

  echo var_dump($inty)." INTEGER <br>";
  echo var_dump($stringy)." STRING WITH 13 CHARACTERS <br>";
  echo var_dump($booly)." BOOLEAN <br>";
  echo var_dump($arri)." ARRAY WITH KEY/VALUES AND DATA TYPES<br>";



  class Dog{
    private $dogName;
    function Bark(){

      echo "Woof";
    }

    function __construct($dogName){
      $this->setName($dogName);
    }

    function setName($dogName){
      if (strlen($dogName) >= 3) {
        $this->dogName = $dogName;
      }
      else {
        $this->dogName = "Fido";
      }
    }

    function getName(){
      return $dogName;
    }

  }

  $smallDoggie = new Dog("Meerkat");
  $bigDoggie = new Dog("DaBomb");
  $midDoggie = new Dog("a");

  echo var_dump($smallDoggie)." OBJECT";
  echo "<br>";
  echo var_dump($bigDoggie)." OBJECT";
  echo "<br>";
  echo var_dump($midDoggie)." OBJECT";
  echo "<br>";
  echo "<br>";


  echo $myDouble = 5.22;
  echo "<br>";

  $dToInt = (int) $myDouble;
  echo $dToInt;
  echo "<br>";echo "<br>";

  $randomNum = rand(50,70);
  echo "Random num between 50 and 70: ". $randomNum;

  echo "<br>";echo "<br>";


  define("NONMUTABLE", 50);
  echo "Constant: ". NONMUTABLE;






  ?>

</body>
</html>
