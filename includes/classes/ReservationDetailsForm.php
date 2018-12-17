<?php 

class ReservationDetailsForm {

	public function createReservationForm() {
			$dateInput = $this->createDateInput();
			$timeInput = $this->createTimeInput();
			$peopleInput = $this->createPeopleInput();
			$nameInput = $this->createNameInput();
			$bookBtn = $this->createBookButton();

		return "
              <form action='index.php' method='POST'>
						$dateInput
						$timeInput
						$peopleInput
						$nameInput
						$bookBtn
              </form>
		";

	}

	private function createDateInput() {
		return "<div class='inputs'>
                    <input id='date' type='date' name='dateR'><br> ";
	}

	private function createTimeInput() {
		return "
              <input id='time' type='time' name='timeR'><br>";
	}

	private function createPeopleInput() {
		return "
              <input id='people' type='number' name='people' placeholder='2 People'><br>";
	}

	private function createNameInput() {
		return "
             <input  id='name' type='text' name='name' placeholder='Your name'><br>
                   </div>";
	}

	private function createBookButton() {
		return "
             <button type='submit' name='submit' id='book-btn' class='btn-book'>Book Now</button>";
	}




}



?>