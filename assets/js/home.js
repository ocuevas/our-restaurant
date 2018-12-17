//Variables
const modal = document.querySelector('.book-message');
const closeBtn = document.querySelector('#close-btn');
const bookBtn = document.querySelector('#book-btn');


//eventListener
bookBtn.addEventListener('click', openModal);

closeBtn.addEventListener('click', closeModel);


//Function to open the model
function openModal(e) {
    e.preventDefault();
    modal.style.display = 'flex';
    
    const people = document.querySelector('#people').value;
    
    if(people <  8 ){
    const name = document.querySelector('#name').value;
    const nameSpan = document.querySelector('#name-reservation');
    nameSpan.textContent =  name + " Thank you for booking a table with us";

    //Print the the date and time.
    const reservationDate = document.querySelector('#date').value;
    const reservationTime = document.querySelector('#time').value;
    const reservationD = document.querySelector('#date-reservation');

    reservationD.textContent =  "You have a recervation on " + reservationDate + " at " + reservationTime;

    } else {
        const nameSpan = document.querySelector('#name-reservation');
        nameSpan.textContent =  "Sorry " + name + " you passed the limited of people. Try AGAIN!"; 
    }
     

   
}


//function to close the model 
function closeModel() {
    modal.style.display = 'none';
}



