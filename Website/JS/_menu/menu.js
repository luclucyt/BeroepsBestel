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

        TopSpan.style.rotate = "45deg";
        TopSpan.style.marginTop = "45%";
        TopSpan.style.height = "4px";

        MiddleSpan.style.marginLeft = "-100vh";

        BottomSpan.style.rotate = "-45deg";
        BottomSpan.style.marginTop = "-45%";
        BottomSpan.style.height = "4px";

        LoginBTN.style.display = "block";

        isOpen = 1;
    }else{
        //OPEN so we close it
        menu.style.width = "0px";
        //menuIcon.src = "images/_menu/openMenu.png";


        menuIcon.style.marginLeft = "1%";
        menuIcon.style.marginTop = "1%";

        LoginBTN.style.display = "none";

        TopSpan.style.rotate = "0deg";
        TopSpan.style.marginTop = "0%";
        TopSpan.style.height = "6px";

        MiddleSpan.style.marginLeft = "10%";

        BottomSpan.style.rotate = "0deg";
        BottomSpan.style.marginTop = "0%";
        BottomSpan.style.height = "6px";

        isOpen = 0;
    }
}