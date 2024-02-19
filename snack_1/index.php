<?php
$giornata_20 = [
    $game1 = [
        $teams = [
            'home' => 'Derthona',
            'away' => 'Dinamo Sassari',
        ],
        $score = [
            'home' => '79',
            'away' => '72',
        ],
    ],
    $game2 = [
        $teams = [
            'home' => 'Olimpia Milano',
            'away' => 'Brindisi',
        ],
        $score = [
            'home' => '69',
            'away' => '55',
        ],
    ],
    $game3 = [
        $teams = [
            'home' => 'Cremona',
            'away' => 'Napoli',
        ],
        $score = [
            'home' => '90',
            'away' => '83',
        ],
    ],
    $game4 = [
        $teams = [
            'home' => 'Brescia',
            'away' => 'Reggiana',
        ],
        $score = [
            'home' => '86',
            'away' => '63',
        ],
        ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBA - Calendar</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <h1>Risultati della giornata</h1>
        <ul>
            <?php foreach ($giornata_20 as $game): ?><li>
                <b><?php echo "{$game[0]['home']} - {$game[0]['away']}"?></b>
                | 
                <i><?php echo "{$game[1]['home']} - {$game[1]['away']}"?></i>
            </li>
            <?php endforeach; ?>
        </ul>

    </main>
</body>
</html>