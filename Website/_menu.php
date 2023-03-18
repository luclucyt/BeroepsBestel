<!-- Menu, DO NOT TOUCH --> 

<header>
    <!--<img src="images/_menu/openMenu.png" alt="closeMenu" class="menuBTN" onclick="ChangeMenuState();" style="z-index: 99;">-->
    
    <div class="menuIconWrapper" onclick="ChangeMenuState();" style="z-index: 99;">
        <div class="span topspan"></div>
        <div class="span middelspan"></div>
        <div class="span bottomspan"></div>
    </div>

    <nav class="navWrapper">
        <ul class="navBar">
            
            <img src="images/_menu/logo.png" alt="logo" class="logo">

            <a href="home.php" class="NavItem"><li class="NavItem">Home</li></a>
            <a href="bestel.php" class="NavItem"><li class="NavItem">Bestel</li></a>
            <a href="eetMenu.php" class="NavItem"><li class="NavItem">Menu</li></a>
            <a href="informatie.php" class="NavItem"><li class="NavItem">Informatie</li></a>
            <a href="reviews.php" class="NavItem"><li class="NavItem">Reviews</li></a>
            
            <?php
                if(isset($_SESSION['admin'])){
                    echo '<a href="admin.php" class="NavItem"><li class="NavItem">Admin</li></a>';
                }
            ?>
        </ul>
        
        <a href="login.php" class="loginBTN">Login</a>
        <label for="darkmodeSwitch" class="darkmodeSwitchLabel">IF checked dark mode is on</label>
        <input type="checkbox" class="darkmodeSwitch" name="darkmodeSwitch" onclick="changeDarkMode()"> 
    </nav>
</header>