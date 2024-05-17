<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaurs Geological Periods</title>
    <style>
        body {
            font-family: Garamound;
            background-color: #333; /* Updated background color */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('<?php echo base_url('assets/images/dinosaur.jpg'); ?>'); /* Add your image path here */
            background-size: cover;
            background-blend-mode: multiply; /* Adjust blend mode for transparency */
        }

        header {
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        li {
            margin: 10px;
            display: inline-block; /* Display links horizontally */
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
            padding: 10px 20px;
            border: 3px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: inline-block;
            background-color: #fff; /* Updated background color */
            color: #333; /* Updated text color */
        }

        a:hover {
            background-color: #646464;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dinosaurs Geological Periods</h1>
    </header>

    <nav>
        <ul>
            <li><a href="<?php echo site_url('dinosaurs/getinfo/Triassic'); ?>">Triassic</a></li>
            <li><a href="<?php echo site_url('dinosaurs/getinfo/Jurassic'); ?>">Jurassic</a></li>
            <li><a href="<?php echo site_url('dinosaurs/getinfo/Cretaceous'); ?>">Cretaceous</a></li>
            <!-- Add more links for other periods as needed -->
        </ul>
    </nav>
</body>
</html>
