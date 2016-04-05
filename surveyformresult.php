<?php
session_start();
 ?>
 <!DOCTYPE HTML>
<html lang= "en-US">
<head>
  <meta charset="utf-8">
  <title> Survey Form Result</title>
  <link rel="stylesheet" href="Surveyform.css">
</head>
<body>
  <div id="container">
    <div id="top">
      <h1>Thank you! Your form has been submitted! <?$_SESSION['counter']?></h1>
    </div>

    <div id="maincontent">
       <h2>Information that has been submitted:</h2>
       <?php      foreach($_SESSION['fields'] as $name => $value)
       {
         echo "<p>" . $name . " : " . $value . "</p>";

       }
       ?>
       <a href="Surveyform.php"> Go Back</a>
     </div>


</body>
</html>
