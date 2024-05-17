<!DOCTYPE html>
<html>
<head>
    <title>Dinosaurs Period Information</title>
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
            color: #fff; /* Set text color to white */
            background-image: url('<?php echo base_url('assets/images/dinosaur.jpg'); ?>'); /* Add your image path here */
            background-size: cover;
            background-blend-mode: multiply; /* Adjust blend mode for transparency */
        }

        h1 {
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .period-info {
            margin-bottom: 20px;
            text-align: left;
            max-width: 600px;
            padding: 20px;
            border: 2px solid #fff; /* Set border color to white */
            border-radius: 5px;
            background-color: #fff; /* Set background color to #333 */
        }

        p {
            margin: 10px 0;
            color: #333; /* Set text color to white */
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .back-button i {
            margin-right: 5px;
        }
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-VKYpC0l2GgCUGvYjqUO16J2jkBhPb3nBPf8qmaEqbdEd3JjWm7L9MwTJCa1qVhFwPZZ8ey4pOWmXGCu/EVFVEA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <a href="<?php echo site_url('dinosaurs/periods'); ?>" class="back-button">
        <i class="fas fa-arrow-left"></i> Back
    </a>

    <h1><?php echo $period_info['title']; ?></h1>

    <div class="period-info">
        <?php foreach ($period_info['info'] as $key => $value): ?>
            <p><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>
