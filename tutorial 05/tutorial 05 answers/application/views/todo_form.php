<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-image: linear-gradient(to right, #6171c8, #4d5ca6); /* Gradient background */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-primary {
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 18px;
            text-transform: uppercase;
            background-color: #0E3386;
        }

        .btn-primary:hover {
            background-color: #6495ED;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 0; /* Add this line to remove bottom margin */
        }

        li {
            background-color: #fff;
            border: 1px solid #041E42;
            margin-bottom: 10px; /* You can remove this line if you don't need margin between list items */
            padding: 15px;
            border-radius: 5px;
            font-size: 16px;
            position: relative;
        }

        li::before {
            content: "\f00c";
            font-family: 'Font Awesome 5 Free';
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #5A4FCF;
            font-size: 20px;
        }

        .todo-actions {
            padding-left: 35px;
        }

        .todo-actions:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 4px;
            background-color: #5A4FCF;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>To-Do List</h2>
        <form action="<?php echo site_url('todo/add_todo_action'); ?>" method="post">
            <div class="form-group">
                <label for="action_title">New Task:</label>
                <input type="text" class="form-control" id="action_title" name="action_title" placeholder="Enter task...">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <h2>Current Tasks</h2>
        <ul>
            <?php foreach ($todo_actions as $action): ?>
                <li>
                    <div class="todo-actions"><?php echo $action['action_title']; ?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
