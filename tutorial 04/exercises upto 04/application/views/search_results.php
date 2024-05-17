<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies based on the generes</title>
    <style>
        body {
            font-family: 'Garamond', serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 20px;
            line-height: 1.6;
        }

        h1 {
            color: #444;
            text-align: center;
            margin-bottom: 30px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        li {
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex: 0 0 calc(33.33% - 20px); /* Adjust based on the desired number of columns */
            box-sizing: border-box;
            margin-right: 20px;
        }

        li:hover {
            transform: scale(1.03);
        }

        li strong {
            color: #555;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px;
        }

        p {
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>Movies based on the generes</h1>
    <?php if ($movies !== false): ?>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <strong>Title:</strong> <?php echo $movie['title']; ?> <br>
                    <strong>Genre:</strong> <?php echo $movie['genre']; ?> <br>
                    <strong>Director:</strong> <?php echo $movie['director']; ?> <br>
                    <strong>Release Date:</strong> <?php echo $movie['release_year']; ?> <br>
                    <strong>IMDB Rating:</strong> <?php echo $movie['imdb_rating']; ?> <br>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No movies found.</p>
    <?php endif; ?>
</body>
</html>
