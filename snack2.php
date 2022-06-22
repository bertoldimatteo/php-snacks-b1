<?php 
    $name = $_GET['userName'];
    $mail = $_GET['userMail'];
    $age = $_GET['userAge'];

    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 

    if ( strlen($name) > 3 && preg_match($pattern, $mail) && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="userName">
        <input type="text" name="userMail">
        <input type="text" name="userAge">
        <button type="submit">Invia</button>
    </form>
</body>
</html>