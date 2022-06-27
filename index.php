<?php 
require_once __DIR__ . '/classes/class.php';

$movies = [
    new Movie('Tenet', 'Christopher Nolan', false, 4.99, 2020),
    new Movie('Interstellar', 'Christopher Nolan', true, 3.99, 2014),
    new Movie('Inception', 'Christopher Nolan', false, 2.99, 2010),
    new Movie('Memento', 'Christopher Nolan', false, 3.99, 2000),
    new Movie('Lightyear', 'Angus MacLane', false, 9.99, 2022),
    new Movie('Black Phone', 'Scott Derrickson', false, 9.99, 2022),
    new Movie('Jurassic World', 'Colin Trevorrow', false, 7.99, 2022)
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christopher Nolan's Movie</title>
</head>
<body>
    <h1>I film di Christopher Nolan</h1>
    <?php foreach($movies as $movie) : ?>
        <?php if($movie->director == 'Christopher Nolan') : ?>
            <ul>
                <strong><?= $movie->title ?></strong>
                <li>Anno di pubblicazione: <?= $movie->year ?></li>
                <?php if($movie->oscar) : ?>
                    <li>Prezzo scontato: <?= $movie->getDiscount() ?> euro  </li>
                    <li>Prezzo base: <?= $movie->price ?> euro</li>
                <?php else : ?>
                    <li>Prezzo base: <?= $movie->price ?> euro</li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>