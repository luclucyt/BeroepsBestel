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

        body.style.backgroundImage = "url('images/_menu/lightMode.png')";
        

        console.log("darkmode is off");
    }
    else if(darkModeCookie.includes("false")){
        //lightmode is on so we change it to darkmode   
        document.cookie = "darkmode=" + true + " expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
        darkmodeSwitch.checked = true;

        window.location.reload();

        body.style.backgroundImage = "linear-gradient(90deg, rgba(25, 103, 103, 0.8),  rgba(3, 21, 21, 0.9) 100%), url('../../images/reviews/solid-concrete-wall.jpg')";
        

        console.log("darkmode is on");
    }
    
}

checkOnLoad();
function checkOnLoad(){
    if(darkModeCookie.includes("true")){
        //darkmode is on so we change it to lightmode
        body.style.backgroundImage = "url('images/_menu/lightMode.png')";
        darkmodeSwitch.checked = false;

        console.log("darkmode is off");
    }
    else if(darkModeCookie.includes("false")){
        //lightmode is on so we change it to darkmode
        body.style.backgroundImage = "linear-gradient(90deg, rgba(25, 103, 103, 0.8),  rgba(3, 21, 21, 0.9) 100%), url('../../images/reviews/solid-concrete-wall.jpg')";
        darkmodeSwitch.checked = true;

        console.log("darkmode is on");
    }
}

//darkmode: "linear-gradient(90deg, rgba(25, 103, 103, 0.8),  rgba(3, 21, 21, 0.9) 100%), url('../../images/reviews/solid-concrete-wall.jpg')"
//lightmode: "url('images/_menu/lightMode.png')"```
