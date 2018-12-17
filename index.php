<?php 
require_once("includes/header.php"); 
require_once("includes/classes/ReservationDetailsForm.php");

?>
    <section class="hero">
        <div class="background-image" style="background-image: url(img/main.jpg);"></div>
            <div class="hero-content-area">
              <h1>Welcome <span>to Our Restaurant</span></h1>
              <p>happiness in your table</p>
            </div>
          </section>
          <div class="book-message">
                <div class="box-recervation">
                        <button id="close-btn">X</button>
                        <h1> <span id="name-reservation"></span></h1>
                        <p><span id="date-reservation"></span></p>
                </div>
            </div>
     <section class="reservation">
         <div class="reservation-content container">
                <h2>Make Online Resevertions</h2>
                <div class="reservation-form">
                <?php 

                    $formReservation = new ReservationDetailsForm();
                    echo $formReservation->createReservationForm();

                 ?>


              
  
                </div>
         </div>
     </section>
     <section class="today-special">
         <div class="today-special-context container">
             <h1>Today <span>Special</span></h1>
               <div class="special-grids">
                   <div class="grids">
                       <img src="assets/img/special-1.jpg" alt="">
                   </div>
                   <div class="grids">
                        <img src="assets/img/special-2.jpg" alt="">
                    </div>
                    <div class="grids">
                            <img src="assets/img/special-3.jpg" alt="">
                        </div>
                        <div class="grids">
                                <img src="assets/img/special-1.jpg" alt="">
                            </div>
               </div>
         </div>
     </section> 

     <section class="menu-section">
         <div class="menu-content container">
                <h1>Menu</h1>
           <div class="content-grid-menu ">
              <div class="grids-menu">
                  <h3>Breakfast</h3>
                  <div class="content-in-menus">
                    <table>
                        <tr>
                          <th> Menu Item</th>
                          <th> Price </th>
                        </tr>
                        <tr>
                          <td> Pancakes </td>
                          <td> $5.00 </td>
                        </tr>
                        <tr>
                          <td> Eggs </td>
                          <td> $4.00 </td>
                        </tr>
                        <tr>
                          <td> Omlete </td>
                          <td> $6.00 </td>
                        </tr>
                        <tr>
                          <td> Waffles </td>
                          <td> $6.00 </td>
                        </tr>
                        <tr>
                          <td> Toast </td>
                          <td> $1.00 </td>
                        </tr>
                      </table>
                  </div>
              </div>
            <div class="grids-menu">
                    <h3>Lunch</h3>
                    <div class="content-in-menus">
                        <table>
                            <tr>
                              <th> Menu Item</th>
                              <th> Price </th>
                            </tr>
                            <tr>
                              <td> BLT </td>
                              <td> $7.00 </td>
                            </tr>
                            <tr>
                              <td> Salad </td>
                              <td> $7.00 </td>
                            </tr>
                            <tr>
                              <td> Soup </td>
                              <td> $6.00 </td>
                            </tr>
                            <tr>
                              <td> Wrap </td>
                              <td> $7.00 </td>
                            </tr>
                            <tr>
                              <td> Casserole </td>
                              <td> $7.00 </td>
                            </tr>
                          </table>
                     </div>
            </div>
                <div class="grids-menu">
                    <h3>Dinner</h3>
                    <div class="content-in-menus">
                        <table>
                            <tr>
                              <th> Menu Item</th>
                              <th> Price </th>
                            </tr>
                            <tr>
                              <td> Cheeseburger </td>
                              <td> $8.00 </td>
                            </tr>
                            <tr>
                              <td> Chicken Sandwich </td>
                              <td> $9.00 </td>
                            </tr>
                            <tr>
                              <td> Cheesesteak </td>
                              <td> $8.00 </td>
                            </tr>
                            <tr>
                              <td> Meatloaf </td>
                              <td> $7.00 </td>
                            </tr>
                            <tr>
                              <td> Chili </td>
                              <td> $5.00 </td>
                            </tr>
                          </table>
                     </div>
              </div>
           </div>     
         </div>
     </section>
     <section class="video-recipe">
         <h2>Recipe of the day</h2>
        <iframe width="600" height="405"
        src="https://www.youtube.com/embed/otWLFewPCZA">
        </iframe>
     </section>

    <script src="assets/js/home.js"></script>
    <?php require_once("includes/footer.php"); ?>
