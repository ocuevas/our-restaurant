<?php require_once("includes/header.php"); ?>
<section class="our-menu">
 <h1>Our Menu</h1> 
 
	<h2 id = "app" > Appetizers </h2>
	<div id = "appetizers">	
		<div class = "menu-item">
			<img src = "assets/img/Appetizer-1.jpg" alt="Buffalo Wings">
			<h3> Buffalo Wings </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $3.00 </h4>	
		</div>
		<div class = "menu-item">
			<img src = "assets/img/Appetizer-2.jpg" alt="Cheese Sticks">
			<h3> Mozzarella Sticks </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>	
			<h4> Price: $2.00 </h4>	
		</div> 
		<div class = "menu-item">
			<img src = "assets/img/Appetizer-3.jpg" alt="Nachos">
			<h3> Nachos </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $5.00 </h4>	
		</div> 		
	</div>
	
	<h2 id = "bre" > Breakfast </h2>
	<div id = "breakfast">	
		<div class = "menu-item">
			<img src = "assets/img/special-1.jpg" alt="Pancakes">
			<h3> Pancakes </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $10.00 </h4>	
		</div>
		<div class = "menu-item">
			<img src = "assets/img/Breakfast-1.jpg" alt="Omelette">
			<h3> Omelette </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $12.00 </h4>	
		</div>
		<div class ="menu-item"> 				
				<img src = "assets/img/Breakfast-2.jpg" alt="French Toast">
				<h3> French Toast </h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<h4> Price: $9.00 </h4>	
		</div>	
	</div>
	
	<h2 id ="din" > Lunch/Dinner </h2>
	<div id = "lunch-dinner">
		<div class = "menu-item">
			<img src = "assets/img/dinner-1.jpg" alt="Burger">
			<h3> Burgers </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $15.00 </h4>	
		</div>
		<div class = "menu-item">
			<img src = "assets/img/Dinner-3.jpg" alt="Steak">
			<h3> Steaks </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $25.00 </h4>	
		</div>
		<div class ="menu-item"> 				
				<img src = "assets/img/special-3.jpg" alt="Chicken">
				<h3> Chicken </h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<h4> Price: $12.00 </h4>	
		</div>			
	</div>
	
	<h2 id = "des" > Dessert </h2>
	<div id = "dessert">	
		<div class = "menu-item">
			<img src = "assets/img/dessert-1.jpg" alt="chscake">
			<h3> Cheesecake </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $10.00 </h4>	
		</div>
		<div class = "menu-item">
			<img src = "assets/img/dessert-2.jpg" alt="icecream">
			<h3> Icecream </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $8.00 </h4>	
		</div>
		<div class ="menu-item"> 				
			<img src = "assets/img/dessert-3.jpg" alt="Cake">
			<h3> Cake </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<h4> Price: $12.00 </h4>
			
		</div>
	</div>		
	
	
	<div class = "menu-thanks">
		<h1> Thanks for Viewing <h1>
	</div>
</div>
</section>

<script>
		
	var des = document.getElementById("des");
	des.addEventListener("click", ShowDessert);
	des.addEventListener("mouseover", highlightDessert);
	des.addEventListener("mouseout", unhighlightDessert);
	
	
			function highlightDessert() {
			document.getElementById("des").style.color = "#F29926";
			}
			function unhighlightDessert(){
			document.getElementById("des").style.color = "#000";
			}
	
	var din = document.getElementById("din");
	din.addEventListener("click", ShowDinner);
	din.addEventListener("mouseover", highlightDinner);
	din.addEventListener("mouseout", unhighlightDinner);
	
			function highlightDinner() {
			document.getElementById("din").style.color = "#F29926";
			}
			function unhighlightDinner(){
			document.getElementById("din").style.color = "#000";
			}
			
	var bre = document.getElementById("bre");
	bre.addEventListener("click", ShowBreakfast);
	bre.addEventListener("mouseover", highlightBreakfast);
	bre.addEventListener("mouseout", unhighlightBreakfast);
	
			function highlightBreakfast() {
			document.getElementById("bre").style.color = "#F29926";
			}
			function unhighlightBreakfast(){
			document.getElementById("bre").style.color = "#000";
			}
			
	var app = document.getElementById("app");
	app.addEventListener("click", ShowAppetizers);
	app.addEventListener("mouseover", highlightAppetizer);
	app.addEventListener("mouseout", unhighlightAppetizer);
	
			function highlightAppetizer() {
			document.getElementById("app").style.color = "#F29926";
			}
			function unhighlightAppetizer(){
			document.getElementById("app").style.color = "#000";
			}
	
	
	

	
	
	
	function ShowAppetizers() {
		var x = document.getElementById("appetizers");
		if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
	
	function ShowBreakfast() {
		var x = document.getElementById("breakfast");
		if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
	
	function ShowDinner() {		
		var x = document.getElementById("lunch-dinner");		
		if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
	
	function ShowDessert() {
		var x = document.getElementById("dessert");
		if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
		
	


	
</script>
<?php require_once("includes/footer.php"); ?>