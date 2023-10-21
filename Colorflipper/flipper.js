/*const hex = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'];
const  btn = document.getElementById("firstbtn")
const colortext = document.getElementById("colortxt")
const colorchange = document.getElementById("wrapping")


btn.addEventListener('click',changebackground)

function changebackground(){
    let hexcolors = '#'
    for(let i=1; i<=6; i++){
       hexcolors +=  rand()
    }
    console.log(hexcolors)
    colorchange.style.backgroundColor = hexcolors
    colortext.innerHTML = hexcolors 
    
}

 

function rand(){
    let randomindex = Math.floor(Math.random()*16)
    return hex[randomindex];
}*/

document.addEventListener("DOMContentLoaded", function () {
    const hex = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'];
    const btn = document.getElementById("firstbtn");
    const colortext = document.getElementById("colortxt");
    const colorchange = document.getElementById("wrapping");
    const body = document.querySelector("body")
    const bgchange = document.getElementById("bgchange")
    const headings =document.getElementById("heads")
    btn.addEventListener('click', function () {
        changebackground();

        changeTextColor();
    });

    function changeTextColor() {
        bgchange.style.color = "white"
    }

    function changebackground() {
        let hexcolors = '#';
        for (let i = 1; i <= 6; i++) {
            hexcolors += rand();
        }
        console.log(hexcolors);
        body.style.backgroundColor = hexcolors;
        colortext.innerHTML = hexcolors;
        headings.innerHTML = hexcolors;
    }

    function rand() {
        let randomindex = Math.floor(Math.random() * 16);
        return hex[randomindex];
    }
});







