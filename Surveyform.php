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
  <div id="container">
    <div id="top">
      <h1 class="titleone"> Survey Form</h1>
    </div>
    <div id = "mainform">
        <form action='./process.php' method='post'>
          <div class="section">
            <label class="label" for="Full_Name">Your Name:</label><input type='text' name='Full_Name' placeholder="Full Name" />
          </div>
          <div class="section">
            <label class="label" for="Location">Dojo Location:</label>
            <select name="Location">
              <option value="Seattle, WA">Seattle, WA</option>
              <option value="Dallas, TX">Dallas, TX</option>
              <option value="Los Angeles, CA">Los Angeles, CA</option>
            </select>
          </div> 
          <div class="section">
            <label class="label" for="Language">Favorite Language:</label>
            <select name="Language">
              <option value="Javascript">Javascript</option>
              <option value="PHP">PHP</option>
              <option value="Mean">Mean</option>
              <option value="IOS">IOS</option>
              <option value="Lamp">Lamp</option>
              <option value="Ruby">Ruby</option>
            </select>
          </div>
          <div class="section"> 
            <label class="label" for="comments">Comment <span>(optional)</span>:</label>
          </div>  
          <textarea name="comments" rows="10" cols="40" placeholder="If you like us, please give us five stars!"></textarea>
          <input class= "button" type='submit' value='Submit!'/>
        </form>
    </div>
  </div>
</body>
</html>
