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
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"], input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      margin: 0 auto; 
      display: block;
      padding: 10px; 
      width: fit-content;
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h2>Enter your date of birth:</h2>
  <form method="post" action="<?php echo site_url('agecalculator_controller/calculate_age'); ?>">

    <label for="dob">Date of Birth:</label>
    <input type="text" name="dob" id="dob" required>

    <input type="submit" value="Calculate Age">
  </form>
  <?php if (isset($error)): ?>
    <p class="error"><?php echo $error; ?></p>
  <?php endif; ?>
</body>
</html>