
//Variables
const i = 0;
const images = [];
const time  = 3000;


//Images links 

images[0] = 'img/Appetizer-1.jpg';
images[1] = 'img/Appetizer-2.jpg';
images[2] = 'img/Appetizer-3.jpg';


//Function to change the images

function changeImg() {
    document.slide.src = images[i];
    if( i < images.length -1){
        i++;
    }else {
        i = 0;
    }
    setTimeout('changeImg()', time);
}

window.onload = changeImg;