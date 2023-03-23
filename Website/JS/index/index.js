let headerImg = document.getElementById('thumbnailWrapper');

let topspan = document.getElementsByClassName('span')[0];
let middelspan = document.getElementsByClassName('span')[1];
let bottomspan = document.getElementsByClassName('span')[2];


let headerImgWidth = headerImg.clientHeight-20;

let darkMenu;

if(darkModeCookie.includes("true")){
    darkMenu = true;
    console.log(darkModeCookie);
    console.log("menu shoud be: true, altus dark");
    console.log(darkMenu);
    console.log("");

}
else{
    darkMenu = false;
    console.log(darkModeCookie);
    console.log("darkmenu = true");
    console.log(darkMenu);
    console.log("");
}

if(darkMenu == false){
    console.log("darkMenu is on, althus menu is white");

    addEventListener("scroll", function(){

        if(this.window.scrollY > headerImgWidth){
            topspan.style.backgroundColor = "var(--Blue)";
            middelspan.style.backgroundColor = "var(--Blue)";
            bottomspan.style.backgroundColor = "var(--Blue)";
        }
        else{
            topspan.style.backgroundColor = "var(--White)";
            middelspan.style.backgroundColor = "var(--White)";
            bottomspan.style.backgroundColor = "var(--White)";
        }}
    );
}
else{
    topspan.style.backgroundColor = "var(--White)";
    middelspan.style.backgroundColor = "var(--White)";
    bottomspan.style.backgroundColor = "var(--White)";
}