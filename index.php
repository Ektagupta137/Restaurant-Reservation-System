<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="https://www.godpng.com/uploads/png/little-cute-krishna-hd-png.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Reservation Open Book Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Saawariya Restaurant</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="https://d27k8xmh3cuzik.cloudfront.net/wp-content/uploads/2018/02/FotoJetcoverindianrest.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="https://revi.b-cdn.net/wp-content/uploads/2017/03/masala-dosa-2.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="https://media.vogue.in/wp-content/uploads/2020/08/chole-bhature-recipe.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">About Us</h4>
	<p><br>The Saawariya Restaurant, first opened in 2023 in Khatoo, Rajasthan. We invite you to embark on a journey where tradition
    innovation, and every meal is an exploration of the extraordinary. Experience a symphony of tastes orchestrated just for you. Saawariya 
    Restaurant is not just a dining destination;it's where stories unfold, and memories are made. Indulge in the artistry
    of our restaurant and make every visit a celebration. <br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Indian_-_Food.jpg" class="img-fluid">
              <img src="https://img.freepik.com/free-photo/delicious-indian-food-tray_23-2148723505.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="https://img.freepik.com/premium-photo/table-full-food-including-rice-curry-plate-food_900958-7307.jpg" class="img-fluid">
              <img src="https://kannanskitchen.com/wp-content/uploads/2021/04/DSC_1079_1.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="https://t4.ftcdn.net/jpg/05/85/29/13/360_F_585291338_0J8Q8vYbKDCu8yqqwAO8PsQZ4ESP2zd8.jpg" class="img-fluid">
               <img src="https://upload.wikimedia.org/wikipedia/commons/5/54/Pasta-2802156_1920.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="https://t4.ftcdn.net/jpg/02/06/85/25/360_F_206852564_DaFrKUw71tfoCrk2TnEz7NNda9g0G6hK.jpg" class="img-fluid">
               <img src="https://t4.ftcdn.net/jpg/05/20/08/67/360_F_520086735_LVj2Ac1vurp5FnDJyGzU48sg2IEjN2cA.jpg" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="https://img.onmanorama.com/content/dam/mm/en/food/features/images/2022/1/11/north-indian-cuisine.jpg.transform/576x300/image.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">Saawariya Restaurant<br><i class="fa fa-map-marker"></i>&nbsp; Saawariya Industries <br>Bawana <br><br>email: saawariya.com<br>phone: +91 9313740957</p>
            </div>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>