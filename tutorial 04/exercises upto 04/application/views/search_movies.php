<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Movies Dashboard</title>
    <style>
        body {
            font-family: Garamound;
            background-color: #f4f4f4;
            margin: 10;
            padding: 0;
        }

        #container{
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #1f628a;
            margin-bottom: 30px;
        }

        #body {
            margin-top: 10px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
        }

        input[type="text"] {
            width: 75%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 20px;
        }

        input[type="submit"]:hover {
            background-color: #297fb8;
        }

        p {
            text-align: left;
            margin-top: 20px;
        }

        p a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        p a:hover {
            text-decoration: underline;
            color: #297fb8;
        }

    </style>
</head>
<body>

<div id="container">
	<h1>Search for your favourite movies</h1>

	<div id="body">
    <?php echo form_open('movies/search'); ?>
        <label for="genre">Enter the genre of the movies you want:</label><br>
        <input type="text" id="genre" name="genre">
        <input type="submit" value="Search Movies">
    <?php echo form_close(); ?>
    <p>If you want to view all movies  <?php echo anchor('movies/allmovies', 'click here'); ?></p>
	</div>
</div>

</body>
</html>