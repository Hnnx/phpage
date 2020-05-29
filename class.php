<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <?php
  class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($title,$author,$pages ){

      $this->title = $title;
      $this->author = $author;
      $this->pages = $pages;



      echo "Obj made <br>";
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

  */
  $book3 = new Book("Naslovna", "Pavcek", 700);

  echo "$book3->title";

  echo "$book1->title".": "."$book2->author";

  ?>

</body>
</html>
