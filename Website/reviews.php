<!DOCTYPE html>
<html lang="en">
<head>    
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <title>De Beren || Reviews</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">
    
    <!-- JS -->
    <script src="JS/_menu/menu.js"></script>
    <script src="JS/login/login.js"></script>
</head>

<body>
    <header>
        <?php include '_menu.php'; ?>
    </header>

    <main>

        <div id="reviewWrapper"></div>
        
        <div id="reviewForm"><br><br><br><br><br><br><br><br><br><br><br><br>
            <form action="" method="POST" onload="onload();">
                <label for="reviewName">Naam:</label>
                <input type="text" name="reviewName" id="reviewName" required readonly><br>

                <label for="reviewText">Review</label>
                <textarea name="reviewText" id="reviewText" cols="30" rows="10" required></textarea>

                <input type="submit" value="Verstuur">
            </form>
        </div>
    </main>

    <footer>
        <?php //include '_footer.php'; ?>
    </footer>
</body>
</html>