<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <title>De Beren || Login</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">
    <link rel="stylesheet" href="CSS/login/login.css">
    
    <!-- JS -->
    <script src="JS/_menu/menu.js"></script>
    <script src="JS/login/login.js"></script>
</head>

<body>
    <header>
        <?php include '_menu.php'; ?>
    </header>

    <main>
        <div id="SingUp">
            <h1 id="header">Maak een account:</h1>
            <form action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Gebruikersnaam"><br>

                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="Wachtwoord"><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Mail"><br>

                <label for="address">Adres:</label>
                <input type="text" name="address" id="address" placeholder="Address"><br>

                <input type="submit" value="Maak het account" id="submitBTN">
            </form>
        </div>

        <div id="login">
            <h1 id="header">Log in:</h1>
            <form action="" method="POST">
                <label for="nameLogin">Naam:</label>
                <input type="text" name="nameLogin" id="nameLogin" placeholder="Gebruikersnaam" value="admin"><br>

                <label for="passwordLogin">Wachtwoord:</label>
                <input type="password" name="passwordLogin" id="passwordLogin" placeholder="Wachtwoord" value="admin"><br>

                <input type="submit" value="Log in" id="submitBTN">
            </form>
        </div>
    </main>

            <?php 
            error_reporting(0);

            //signup
            if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address'])){
                $nameInput = $_POST['name'];
                $passwordInput = $_POST['password'];
                $emailInput = $_POST['email'];
                $addressInput = $_POST['address'];

                //check if user already exists
                $text = file_get_contents("data/login/data.txt");
                $usersArray = explode("\n", $text);
                $userArray = explode("||", rtrim($usersArray[$i], "\\"));

                foreach ($usersArray as $user) {
                    $userArray = explode("||", $user);
                    if ($userArray[0] === $nameInput) {
                        echo "<p id='info'>Deze Gebruikersnaam wordt al gebruikt. Gebruik een andere Gebruikersnaam.</p>";
                        exit();
                    }
                    if ($userArray[2] === $emailInput) {
                        echo "<p id='info'>Deze Email wordt al gebruikt. Gebruik een andere Email.</p>";
                        exit();
                    }
                }

                //write the user data to the file
                $file = fopen("data/login/data.txt", "a");
                fwrite($file, $nameInput . "||" . $passwordInput . "||" . $emailInput . "||" . $addressInput . "\n");
            }

            //login
            if(isset($_POST['nameLogin']) && isset($_POST['passwordLogin'])){
                $nameInput = $_POST['nameLogin'];
                $passwordInput = $_POST['passwordLogin'];

                $text = file_get_contents("data/login/data.txt");
                $usersArray = explode("\n", $text);

                //remove last empty line from array
                array_pop($usersArray);

                //loop through users array and check if user exists and password is correct
                foreach($usersArray as $userLine){
                    $userArray = explode("||", $userLine);

                    if($userArray[0] == $nameInput && $userArray[1] == $passwordInput){
                        echo "<p id='info'>Inloggen Succesvol, welkom " . $userArray[0] . ".</p><br><br><br>";
                        echo 
                        "<script>
                            naam = '". $userArray[0] . "'
                            wachtwoord = '". $userArray[1] . "'
                            mail = '". $userArray[2] . "'
                            address = '". $userArray[3] . "'
                            //alert(naam + ', ' + wachtwoord + ', ' + mail + ', ' + address)
                            console.log(naam + ', ' + wachtwoord + ', ' + mail + ', ' + address)
                        </script>";
                    }
                }
            }
        ?>

    <footer>
        <?php //include '_footer.php'; ?>
    </footer>
</body>
</html>