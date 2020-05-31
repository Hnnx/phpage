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


  echo "<br>";echo "<br>";
  echo "Constant Array:";
  echo "<br>";

  define("books", ["myBook","secondBook", "Bookie"]);

  echo books[2];

  echo "<br>";echo "<br>";


  echo $vpis = (empty($uName)) ? "log in" : "welcome, $uName";

  $uName = "Henrik";
  echo "<br>";echo "<br>";
  date_default_timezone_set('Europe/Rome');

  echo $vpis = (empty($uName)) ? "log in" : "welcome, $uName";
  echo "<br><p>Time</p>";
  echo date("D, d M Y H:i:s");
  echo "<br><br>";

  function whatTime(){

    if(date("G") >= 6 && date("G") < 12){
      echo "Good morning, it's ".date("G:i");
    }
    elseif(date("G") >= 12 && date("G") < 19){
      echo "Good afternoon, it's ".date("G:i");
    }elseif(date("G") >= 19){
      echo "Good evening, it's ".date("G:i");
    }
    else {
    }
  }

  whatTime();
  echo "<br>";


  $loopX = 0;

  while($loopX < 100){
    echo "Num: $loopX<br>";
    $loopX+=10;
  }

  echo "Out of loop: ".$loopX;
  echo "<br>";echo "<br>";

  $assoc = array("Mick" => "C","John" => "F" );

  echo $assoc["John"];




  echo "<br>";echo "<br>";

  $carz = array("BMW"=>"320i","Audi"=>"A3","Mercedez"=>"E53","Fiat"=>"Punto");

  foreach ($carz as $element => $value){
    echo "Brand: $element, Model: $value <br>";
  }

  echo "<br>";


  $bikez = array ("BMW"=>"S1000RR", "Kawasaki"=>"ZX1000","Suzuki"=>"GSX-R1000", "Honda" =>"CBR 1000 RR", "Yamaha"=>"R1-M", "Ducati"=>"V4");
    $counter = 0;
    foreach ($bikez as $make=>$model){
      $counter++;
      echo "$counter ) $make: $model<br>";
    }

    echo "<br>";echo "<br>";

    echo "Defult parameter";
    echo "<br>";

    function simpleGreet($name = "Andrew"){

      echo "Greetings, $name";
    }

    simpleGreet("Jacob");
    echo "<br>";
    simpleGreet();












  ?>

</body>
</html>
