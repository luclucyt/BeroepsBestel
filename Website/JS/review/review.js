let DataArray = document.cookie;

DataArray = DataArray.split(";");

let logedIn = DataArray[0].split("=")[1];
let name = DataArray[1].split("=")[1];
let password = DataArray[2].split("=")[1];
//let email = DataArray[3].split("=")[1];
let place = DataArray[4].split("=")[1];

//document.getElementById("reviewName").value = name;

//DO NEVER CHANGE, IT WILL BREAK THE CODE AND IT WON'T WORK
//AND ME DON'T WANT THAT, DO I? NO, I DON'T WANT THAT AT ALL YOU FUNNY LITTLE GUY
//I DONT EVEN KNOW WHAT THIS DOES SO HOW CAN I FIX IT THEN?

if ( window.history.replaceState ) { 
    window.history.replaceState( null, null, window.location.href ); 
}