var button = document.getElementById('onOffButton');
button.style.backgroundColor = "skyblue";


function onOff (){
    var button = document.getElementById('onOffButton');
    if (button.value == "off"){
        button.value = "on";
        button.style.backgroundColor = "green";
    }else {
        button.value = "off";
        button.style.backgroundColor = "red";
    }

}





/*

to do list 

change off on to the DB

show changes on seperate PHP file 

*/



