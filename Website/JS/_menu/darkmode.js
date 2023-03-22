let darkmodeSwitch = document.getElementsByClassName("darkmodeSwitch")[0];
let body = document.getElementsByTagName("body")[0]; 


let cookieArray = document.cookie.split(";");
let darkModeCookie = cookieArray.find(cookie => cookie.includes("darkmode"));

if(darkModeCookie == undefined){
    //no cookie found so we create one  
    document.cookie = "darkmode=" + true + " expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
    window.location.reload();
}


function changeDarkMode(){
    
    if(darkModeCookie.includes("true")){
        //darkmode is on so we change it to lightmode 
        document.cookie = "darkmode=" + false + " expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
        darkmodeSwitch.checked = false;

        window.location.reload();

        body.classList.add("lightmode");
        //body.style.background = "url('images/_menu/lightMode.png')";
        

        console.log("darkmode is off");
    }
    else if(darkModeCookie.includes("false")){
        //lightmode is on so we change it to darkmode   
        document.cookie = "darkmode=" + true + " expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
        darkmodeSwitch.checked = true;

        window.location.reload();

        body.classList.add("darkmode");
        //body.style.background = "linear-gradient(90deg, rgba(25, 103, 103, 0.8),  rgba(3, 21, 21, 0.9) 100%), url('../../images/reviews/solid-concrete-wall.jpg')";
        

        console.log("darkmode is on");
    }
    
}

checkOnLoad();
function checkOnLoad(){
    if(darkModeCookie.includes("true")){
        //darkmode is on so we change it to lightmode

        //body.style.backgroundImage = "url('images/_menu/lightMode.png')";
        darkmodeSwitch.checked = false;

        body.classList.add("lightmode");
        console.log("darkmode is off");
    }
    else if(darkModeCookie.includes("false")){
        //lightmode is on so we change it to darkmode
        darkmodeSwitch.checked = true;

        body.classList.add("darkmode");
        console.log("darkmode is on");
    }
}

//darkmode: "linear-gradient(90deg, rgba(25, 103, 103, 0.8),  rgba(3, 21, 21, 0.9) 100%), url('../../images/reviews/solid-concrete-wall.jpg')"
//lightmode: "url('images/_menu/lightMode.png')"```
