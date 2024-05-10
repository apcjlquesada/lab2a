<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>Welcome to my Personal Page</h1>
  <p>Joe Gene Quesada</p>
<?php
//echo "My first PHP script!<br>";
//$txt = "W3Schools.com";
//echo "I love " . $txt . "!";


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}


?>
  
  
</div>

</body>
</html>

