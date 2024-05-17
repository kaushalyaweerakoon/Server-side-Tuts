<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Student Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #container {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
        }

        #body {
            color: #666;
            line-height: 1.6;
        }

        p {
            margin: 10px 0;
        }

        img {
            max-width: 100%;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div id="container">
    <h1>Student Name: <?php echo $student_name; ?></h1>

    <div id="body">
        <p>Student at University of Westminster</p>
        <p>Course: <?php echo $course; ?></p>
        <img src="<?php echo $image_url; ?>" alt="Student Image">
    </div>
</div>

</body>
</html>
