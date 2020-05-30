<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="pageStyle.css">
  <title>PHP Playground</title>
</head>
<body>

  <?php
  $partNum = 3;
  $partTitle = "OOP in PHP";

  include "header.html" ?>

  <div class="block2">
    <h5>16) Classes</h5>

    <p class="codeOutput">CODE</p>
    <p class="code">
      <strong>//Class declaration</strong><br><br>
      class Book{<br>
        &nbsp;&nbsp;var $title;<br>
        &nbsp;&nbsp;var $author;<br>
        &nbsp;&nbsp;var $pages;<br>
        <br>
        function __construct($title,$author,$pages ){<br>
          <br>
          &nbsp;&nbsp;$this->title = $title;<br>
          &nbsp;&nbsp;$this->author = $author;<br>
          &nbsp;&nbsp;$this->pages = $pages;<br>
          <br>
          &nbsp;echo "Object made";<br>
          &nbsp;}<br>
        }<br>
        <br>
        <strong>//Commented out - current constructor has 3 parameters</strong>
        <br> <em class="grayed-out">
          /*<br>
          $book1 = new Book();<br>
          $book1->title = "Harry Potter";<br>
          $book1->author = "Tokien";<br>
          $book1->pages = 400;<br>
          <br>
          $book2 = new Book();<br>
          $book2->title = "The book about books";<br>
          $book2->author = "T. Moore";<br>
          $book2->pages = 170;<br>
          <br>
          echo "$book1->title".": "."$book2->author";<br>
          */<br></em>
          <br><strong>//passing arguments to the constructor</strong><br><br>
          $book3 = new Book("Booktitle 15", "Phillip", 700);<br>
          echo "$book3->title";<br>
          $book3->title = "Changed Title 16";<br>
          echo "$book3->title";<br>
        </p><br>
        <p class="codeOutput">OUTPUT</p>

        <div class="output">

          <?php

          class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($title,$author,$pages ){

              $this->title = $title;
              $this->author = $author;
              $this->pages = $pages;

              echo "<em>Object made</em> <br><br>";
            }
          }

          /*
          $book1 = new Book();
          $book1->title = "Harry Potter";
          $book1->author = "Tokien";
          $book1->pages = 400;

          $book2 = new Book();
          $book2->title = "The book about books";
          $book2->author = "T. Moore";
          $book2->pages = 170;

          echo "$book1->title".": "."$book2->author";

          */

          $book3 = new Book("Dragons And Stuff", "Tolkien", 700);
          echo "Book title: $book3->title <br>";
          $book3->title = "Stuff And Dragons - Part II";
          echo "Changed book title: $book3->title";

          ?>

        </div>

      </div>

      <div class="block1">

        <h5>17) Class functions</h5>
        <p class="codeOutput">CODE</p>
        <p class="code">

          class Student {<br>
            var $name;<br>
            var $major;<br>
            var $gpa;<br>
            <br>
            function __construct($name,$major,$gpa){<br>
              &nbsp;&nbsp;$this->name = $name;<br>
              &nbsp;&nbsp;$this->major = $major;<br>
              &nbsp;&nbsp;$this->gpa = $gpa;<br>
            }<br>
            <br>
            function hasHonours(){<br>
              &nbsp;&nbsp;if($this->gpa >= 3.5)<br>
              &nbsp;&nbsp;return "true";<br>
              &nbsp;&nbsp;else<br>
              &nbsp;&nbsp;return "false";<br>
              &nbsp;}<br>
            }//END CLASS<br>
            <br>
            $student1 = new Student("Monica", "Maths", 3.0);<br>
            $student2 = new Student("John", "Biology", 4.2);<br>
            <br>
            echo "$student1->name"." ".$student1->hasHonours()."( ".$student1->gpa." )";<br>
            echo "&lt;br&gt;&lt;br&gt;";<br>
            echo "$student2->name"." ".$student2->hasHonours()."( ".$student2->gpa." )";<br>
          </p><br>

          <p class="codeOutput">OUTPUT</p>


          <div class="output">

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
                return "passed with honours";
                else
                return "didn't pass with honours";
              }
            }//END CLASS

            $student1 = new Student("Monica", "Maths", 3.1);
            $student2 = new Student("John", "Biology", 4.2);

            echo "$student1->name"." ".$student1->hasHonours()."( ".$student1->gpa." )";
            echo "<br><br>";
            echo "$student2->name"." ".$student2->hasHonours()."( ".$student2->gpa." )";

            ?>
          </div>
        </div>

        <div class="block2">
          fsdfds

        </div>

        <?php
        $blockX = "block2";

        $linkBack = "site2.php";
        $linkNext = "#";

        $made = "Coded";
        $stuff = "love";
        include "footer.html" ?>



      </body>
      </html>
