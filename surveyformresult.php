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
      <h1>Thank you <?= $_SESSION['fields']['Full_Name']; ?> !</h1>
      <h2>Your form has been submitted <?= $_SESSION['counter']?> times this session!</h2>
    </div>

    <div id="maincontent">
       <h3>Information that has been submitted:</h3>
       <?php      foreach($_SESSION['fields'] as $name => $value)
       {
         echo "<p class='labels'>" . $name . ": </p><p>" . $value . "</p>";
       }
       ?>
       <a href="Surveyform.php">Go Back</a>
    </div>
  </div>

</body>
</html>
