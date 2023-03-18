let isOpen = 0;

function ChangeMenuState(){
    let menu = document.getElementsByClassName("navWrapper")[0];
    let menuIcon = document.getElementsByClassName("menuIconWrapper")[0];
    let LoginBTN = document.getElementsByClassName("loginBTN")[0];

    let TopSpan = document.getElementsByClassName("topspan")[0];
    let MiddleSpan = document.getElementsByClassName("middelspan")[0];
    let BottomSpan = document.getElementsByClassName("bottomspan")[0];

    
    
    if(isOpen == 0){ 
        //NOT OPEN so we open it
        menu.style.width = "20%";
        //menuIcon.src = "images/_menu/closeMenu.png";

        menuIcon.style.marginLeft = "2%";
        menuIcon.style.marginTop = "2%";
        menu.style.borderRight = "5px solid var(--Blue)";

        TopSpan.style.rotate = "45deg";
        TopSpan.style.marginTop = "50%";
        TopSpan.style.height = "4px";

        MiddleSpan.style.marginLeft = "-100vh";

        BottomSpan.style.rotate = "-45deg";
        BottomSpan.style.marginTop = "-50%";
        BottomSpan.style.height = "4px";

        TopSpan.style.backgroundColor = "var(--Blue)";
        MiddleSpan.style.backgroundColor = "var(--Blue)";
        BottomSpan.style.backgroundColor = "var(--Blue)";

        LoginBTN.style.display = "block";
        darkmodeSwitch.style.display = "block";

        isOpen = 1;
    }else{
        //OPEN so we close it
        menu.style.width = "0px";
        //menuIcon.src = "images/_menu/openMenu.png";


        menuIcon.style.marginLeft = "1%";
        menuIcon.style.marginTop = "1.5%";
        menu.style.borderRight = "0px solid var(--Blue)";

        LoginBTN.style.display = "none";
        darkmodeSwitch.style.display = "none";

        TopSpan.style.rotate = "0deg";
        TopSpan.style.marginTop = "0%";
        TopSpan.style.height = "6px";

        MiddleSpan.style.marginLeft = "11%";

        BottomSpan.style.rotate = "0deg";
        BottomSpan.style.marginTop = "0%";
        BottomSpan.style.height = "6px";

        TopSpan.style.backgroundColor = "var(--White)";
        MiddleSpan.style.backgroundColor = "var(--White)";
        BottomSpan.style.backgroundColor = "var(--White)";

        isOpen = 0;
    }
}