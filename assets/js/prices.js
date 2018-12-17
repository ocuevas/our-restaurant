	
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
		
	


	