<?php require_once("includes/header.php"); ?>

<section class="our-cantact-page">
	<div class="contact-content-form container"> 
 <h1>Our Contact</h1>
 <form id="contact" action="">
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
  </form>
	</div>

</section>



<?php require_once("includes/footer.php"); ?>