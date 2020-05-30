<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="pageStyle.css">

  <meta charset="utf-8">
  <title>PHP classes</title>
</head>
<body>

  <?php include "header.html" ?>

  <?php
  class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($title,$author,$pages ){

      $this->title = $title;
      $this->author = $author;
      $this->pages = $pages;

      echo "Object made <br>";
    }

  }

  /*
  $book1 = new Book();
  $book1->title = "Povodni Moz";
  $book1->author = "Presern";
  $book1->pages = 400;

  $book2 = new Book();
  $book2->title = "The book about books";
  $book2->author = "T. Moore";
  $book2->pages = 170;

  echo "$book1->title".": "."$book2->author";

  */

  $book3 = new Book("Naslovna", "Pavcek", 700);
  echo "$book3->title";
  $book3->title = "spremembaNaslova";
  echo "$book3->title";

  ?>


  <?php
  class Student {
    var $name;
    var $major;
    var $gpa;

    function __construct($name,$major,$gpa){
      $this->name = $name;
      $this->major = $major;
      $this->gpa = $gpa;
    }


    function hasHonours(){

      if($this->gpa >= 3.5)
        return "true";
        else
        return "false";
    }


  }//END CLASS


  $student1 = new Student("Ana", "Matematika", 3.0);
  $student2 = new Student("Miha", "Biologija", 4.2);

  echo $student1->hasHonours();
  echo $student2->hasHonours();


  ?>

  <?php
  $made = "Coded";
  $stuff = "love";
  include "footer.html" ?>



</body>
</html>
