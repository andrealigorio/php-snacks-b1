<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <?php 
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];

        if(strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
            if(($age < 4 || $age > 110) || strpos($age, ".")) {
                echo "Età errata";
            } else {
                echo "Accesso Riuscito";
            }
        } else {
            echo "Accesso Negato";
        }
    ?>
</body>
</html>