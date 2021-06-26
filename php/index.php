<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorial</title>
</head>
<body>


  
 <?php
  // class Student{
  //   var $name;
  //   var $major;
  //   var $gpa;

  //   function __construct($name, $major, $gpa){
  //     $this->name = $name;
  //     $this->major = $major;
  //     $this->gpa = $gpa;
  //   }

  //   function hasHonors(){
  //     if($this->gpa >= 3.5){
  //       return "true";
  //     }
  //     return "false";
  //   }

  //   function getGpa(){
  //     echo $this->gpa;
  //   }

  // }

  // $student1 = new Student("Jim", "Business", 2.8);
  // $student2 = new Student("Pam", "Art", 3.6);

  class Movie{
    public $name;
    private $rating;

    function __construct($name, $rating){
      $this->name = $name;
      $this->setRating($rating);
    }

    function getRating(){
      return $this->rating;
    }

    function setRating($rating){
      if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
        $this->rating = $rating;
      } else
          $this->rating = "NR";
    }
  }

  $avengers = new Movie("Avengers", "PG-13");

  
  echo $avengers->getRating();

  
  

  
 ?>
     
   
  
</body>
</html>