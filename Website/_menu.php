<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">

    <!-- JS -->
    <script src="JS/_menu/menu.js"></script>

</head>

<header>
    <img src="images/_menu/openMenu.png" alt="closeMenu" class="menuBTN" onclick="ChangeMenuState();" style="z-index: 99;">
    <nav class="navWrapper">
        <ul class="navBar">
            
            <img src="images/_menu/logo.png" alt="logo" class="logo">

            <a href="index.php" class="NavItem"><li class="NavItem">Home</li></a>
            <a href="bestel.php" class="NavItem"><li class="NavItem">Bestel</li></a>
            <a href="informatie.php" class="NavItem"><li class="NavItem">Informatie</li></a>
            <a href="reviews.php" class="NavItem"><li class="NavItem">Reviews</li></a>
            <a href="eetMenu.php" class="NavItem"><li class="NavItem">Menu</li></a>
        </ul>
        
        <a href="login.php" class="loginBTN">Login</a>
    
    </nav>
</header>