<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Garamond;
    margin: 50px auto;
    max-width: 400px;
    text-align: center;
  }

  h2 {
    font-size: 1.5em;
    margin-bottom: 20px;
  }

  .age-result {
    font-weight: bold;
    font-size: 1.2em;
    color: #4CAF50;
  }
</style>
</head>
<body>
    <h2>Your age is <span class="age-result"><?php echo $age; ?></span> years old.</h2>
</body>
</html>