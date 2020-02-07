<!DOCTYPE html>
<html>

<head>
  <title>My first php page.</title>
</head>

<body>
  <?php
  $characterName = "Tom";
  $characterAge = 35;
  echo ("There once was a man named $characterName <br>");
  echo ("He was $characterAge years old <br>");
  $characterName = "Mike";
  echo ("He really liked the name $characterName <br>");
  echo ("But didn't like being $characterAge <br>");
  ?>
</body>

</html>