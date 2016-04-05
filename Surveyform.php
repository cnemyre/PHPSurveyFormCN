<?php
session_start();

 ?>
 <!DOCTYPE HTML>
<html lang= "en-US">
<head>
  <meta charset="utf-8">
  <title> Survey Form</title>
  <link rel="stylesheet" href="Surveyform.css">
</head>
<body>
  <h1 class="titleone"> Survey Form</h1>
  <div id = "mainform">
  <form action='./process.php' method='post'>
  <label>Your Name: <input type='text' name='full_name'><br></br></label>
      <label>Dojo Location:
        <select name="Location">
          <option value="Seattle, WA">Seattle, WA</option>
          <option value="Dallas, TX">Dallas, TX</option>
          <option value="Los Angeles, CA">Los Angeles, CA</option>
        </select><br></br>
      <label>Favorite Language:
        <select name="Language">
          <option value="Javascript">Javascript</option>
          <option value="PHP">PHP</option>
          <option value="Mean">Mean</option>
          <option value="IOS">IOS</option>
          <option value="Lamp">Lamp</option>
          <option value="Ruby">Ruby</option>
        </select><br></br>
      Comment <span>(optional)</span>:</span> <br></br><textarea name="comments" rows="10" cols="40"></textarea>
      <input class = "button" type='submit' value='Submit!'/>
  </form>
</div>
</body>
</html>
