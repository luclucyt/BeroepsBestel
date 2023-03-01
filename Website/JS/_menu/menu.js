let isOpen = 0;
function ChangeMenuState(){
    let menu = document.getElementsByClassName("navWrapper")[0];
    let menuIcon = document.getElementsByClassName("menuBTN")[0];
    let LoginBTN = document.getElementsByClassName("loginBTN")[0];
    
    if(isOpen == 0){
        menu.style.width = "20%";
        menuIcon.src = "images/_menu/closeMenu.png";

        menuIcon.style.marginLeft = "2%";
        menuIcon.style.marginTop = "2%";

        LoginBTN.style.display = "block";

        isOpen = 1;
    }else{
        menu.style.width = "0px";
        menuIcon.src = "images/_menu/openMenu.png";


        menuIcon.style.marginLeft = "1%";
        menuIcon.style.marginTop = "1%";

        LoginBTN.style.display = "none";

        isOpen = 0;
    }
}