let headerImg = document.getElementById('thumbnailWrapper');

let topspan = document.getElementsByClassName('span')[0];
let middelspan = document.getElementsByClassName('span')[1];
let bottomspan = document.getElementsByClassName('span')[2];


let headerImgWidth = headerImg.clientHeight-20;

let darkMenu;

if(darkModeCookie.includes("true")){
    darkMenu = true;
}
else{
    darkMenu = false;
}


topspan.style.backgroundColor = "var(--White)";
middelspan.style.backgroundColor = "var(--White)";
bottomspan.style.backgroundColor = "var(--White)";


if(darkMenu == false){

    addEventListener("scroll", function(){

        if(this.window.scrollY > headerImgWidth && darkMenu == true){
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
    addEventListener("scroll", function(){
        
        if(this.window.scrollY > headerImgWidth && darkMenu == true){
            topspan.style.backgroundColor = "var(--Blue)";
            middelspan.style.backgroundColor = "var(--Blue)";
            bottomspan.style.backgroundColor = "var(--Blue)";
        }
        else{
            topspan.style.backgroundColor = "var(--White)";
            middelspan.style.backgroundColor = "var(--White)";
            bottomspan.style.backgroundColor = "var(--White)";
        }
    });
}