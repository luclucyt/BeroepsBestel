let darkmodeSwitch = document.getElementsByClassName("darkmodeSwitch")[0];
let body = document.getElementsByTagName("body")[0]; 


let cookieArray = document.cookie.split(";");
let darkModeCookie = cookieArray.find(cookie => cookie.includes("darkmode"));

if(darkModeCookie == undefined){
    //no cookie found so we create one  
    document.cookie = "darkmode=" + true + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    window.location.reload();
}


function changeDarkMode(){
    
    if(darkModeCookie.includes("true")){
        //darkmode is on so we change it to lightmode 
        document.cookie = "darkmode=" + false + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        darkmodeSwitch.checked = false;

        window.location.reload();

        body.classList.add("lightmode");
    }
    else if(darkModeCookie.includes("false")){
        //lightmode is on so we change it to darkmode   
        document.cookie = "darkmode=" + true + " expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        darkmodeSwitch.checked = true;

        window.location.reload();

        body.classList.add("darkmode");
    }
    
}

checkOnLoad();
function checkOnLoad(){
    if(darkModeCookie.includes("true")){
        //darkmode is on so we change it to lightmode
        darkmodeSwitch.checked = false;

        body.classList.add("lightmode");
    }
    else if(darkModeCookie.includes("false")){
        //lightmode is on so we change it to darkmode
        darkmodeSwitch.checked = true;

        body.classList.add("darkmode");
    }
}