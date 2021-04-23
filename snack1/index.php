<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <?php 
        $basketMatches = [
            "1match" => [
                "homeTeam" => "Olimpia Milano",
                "homeResult" => 55,
                "awayTeam" => "Cantù",
                "awayResult" => 60
            ],
            "2match" => [
                "homeTeam" => "Dinamo Sassari",
                "homeResult" => 73,
                "awayTeam" => "Virtus Bologna",
                "awayResult" => 65
            ],
            "3match" => [
                "homeTeam" => "Brescia",
                "homeResult" => 63,
                "awayTeam" => "Varese",
                "awayResult" => 69
            ],
            "4match" => [
                "homeTeam" => "Reggiana",
                "homeResult" => 53,
                "awayTeam" => "Virtus Roma",
                "awayResult" => 77
            ],
            "5match" => [
                "homeTeam" => "Reyer Venezia",
                "homeResult" => 49,
                "awayTeam" => "Aquila Trento",
                "awayResult" => 57
            ],
        ];

        foreach($basketMatches as $match) {
            echo '<h2>' . $match["homeTeam"] . ' - ' . $match["awayTeam"] . ' | ' . $match["homeResult"] . '-' . $match["awayResult"] . '</h2>';
        }
    ?>
</body>
</html>