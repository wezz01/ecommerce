<?php

@include 'config.php';

session_start();


    // if(!isset($_SESSION['user_name'])){
        //    header('location:login_form.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karnali</title>
        
        <!-- owl carousel css file cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylefinal.css">

    <style>
        
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    min-height: 30vh !important;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 16px 16px;
  background-color: var(--blue);
  color: white;
}

.modal-body {
    padding: 16px 16px;
    }

.modal-footer {
    padding: 16px 16px;
    background-color: var(--blue);
    color: white;
}
.icons{
    text-align: left !important;
}
.h3{
    font-weight: bold;
    font-size: 15px;
}

</style>

</head>
<body>
    
    <!-- header section starts  -->

<header>

<div class="header-1">
    
    
    <img src="images/Karnalilogo.png" width="125px">

    <div class="form-container">
        <form action="">
            <input type="search" placeholder="search products" id="search" /> 
            <label for="search" class="fas fa-search"></label>
        </form>
    </div>

</div>

<div class="header-2">
    
    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#arrival">arrival</a></li>
            <li><a href="#featured">featured</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#deal">deal</a></li>
        </ul>
    </nav>

    <div class="icons">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <!-- Trigger/Open The Modal -->
        <a href="#" id="myBtn" class="fas fa-shopping-cart"></a>
        <?php
      if(isset($_SESSION['user_name'])){
            echo '<a href="logout.php" class="btn">logout</a>';
        
      } else{
          echo '<a href="login_form.php" class="fas fa-user"></a>';
      }
      ?>
        <!-- <a href="login_form.php" class="fas fa-user">User Login</a>
        <a href="admin.php" class="fas fa-user">Admin Login</a> -->
    </div>

</div>


<!-- The Modal -->
<div id="myModal" class="modal">
    
    <!-- Modal content -->
  <div class="modal-content deal">
      <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Your Cart</h2>
    </div>
    <div class="modal-body icons-container">
        <div class="icons">
            <?php
//Set session variables
$_SESSION["items"]['green'] = 1000;
$_SESSION["items"]['price'] = 2000;
foreach($_SESSION["items"] as $x => $x_value) {
    echo "<div class='h3'>Item:" . $x . " Price: Rs" . $x_value;
    echo "</div>";
}
?>
</div>
<div class="icons">
    <div class='h3'>Order Summary</div>
    <div class='h3'>Subtotal (0 items)</div>
    <div class='h3'>Rs. 0</div>
    <div class='h3'>Total	Rs. 0</div>
    <div>
        
        
        </div>
    <div class="modal-footer">
        <h3>Payment - Cash on delivery</h3>
    </div>
</div>

</div>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
    
    <div class="home-slider owl-carousel">
        
        <div class="item">
            <img src="images/home_img1.jpg" alt="">
            <div class="content">
            <h3>Heavy Discounts</h3>
            <p>Huge discounts are really happening here</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    
    <div class="item">
        <img src="images/latest.jpg" alt="">
        <div class="content">
            <h3>latest products</h3>
            <p>Deals especially designed for you</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    
    <div class="item">
        <img src="images/home_img3.jpg" alt="">
        <div class="content">
            <h3>trending shoes</h3>
            <p>Bring on the fun and excitement every one of our shoes brings</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    
</div>

</div>

</section>

<!-- home section ends -->

<!-- arrival section starts  -->

<section class="arrival" id="arrival">
    
<h1 class="heading"> <span>new arrivals</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/croptop1.jpg" alt="">
        </div>
        <div class="info">
            <h3>Red Crop Top</h3>
            <div class="subInfo">
                <strong class="price"> Rs1000/- <span>Rs1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <!-- <a href="#" style="--i:1;" class="fas fa-heart"></a> -->
            <a href="#" onClick="setLeft()" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/flare.jpg" alt="">
        </div>
        <div class="info">
            <h3>Flare Pant</h3>
            <div class="subInfo">
                <strong class="price"> Rs2500/- <span>Rs3000/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <!-- <a href="#" style="--i:1;" class="fas fa-heart"></a> -->
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/shoes.jpg" alt="">
        </div>
        <div class="info">
            <h3>latest shoes</h3>
            <div class="subInfo">
                <strong class="price"> Rs3000/- <span>Rs4000/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <!-- <a href="#" style="--i:1;" class="fas fa-heart"></a> -->
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>
    
    <div class="box">
        <div class="image">
            <img src="images/maletshirt.jpg" alt="">
        </div>
        <div class="info">
            <h3>Red T-Shirt</h3>
            <div class="subInfo">
                <strong class="price"> Rs1000/- <span>Rs1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <!-- <a href="#" style="--i:1;" class="fas fa-heart"></a> -->
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/whiteshoes.jpg" alt="">
        </div>
        <div class="info">
            <h3>Full Sneakers</h3>
            <div class="subInfo">
                <strong class="price"> Rs1000/- <span>Rs1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
        
            <!-- <a href="#" style="--i:1;" class="fas fa-heart"></a> -->
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/pant.jpg" alt="">
        </div>
        <div class="info">
            <h3>Grey Joggers</h3>
            <div class="subInfo">
                <strong class="price"> Rs1200/- <span>Rs2000/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <!-- <a href="#" style="--i:1;" class="fas fa-heart"></a> -->
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

</div>

</section>

<!-- arrival section ends -->

<!-- featured section starts  -->

<section class="feature" id="featured">

<h1 class="heading"> <span> featured product </span> </h1>

<div class="row">

    <div class="image-container">

        <div class="big-image">
            <img src="images/white1.jpg" alt="">
        </div>

        <div class="small-image">
            <img class="image-active" src="images/white1.jpg" alt="">
            <img src="images/white2.png" alt="">
            <img src="images/white3.jpg" alt="">
            <img src="images/white4.jpg" alt="">
            
        </div>

    </div>

    <div class="content">

        <h3>plain t-shirts</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>(500+) reviews</span>
        </div>
        <p>The T-shirt you need. Built for comfort</p>
        <strong class="price">Rs800 <span>Rs1000</span> </strong>
        <a href="#"><button class="btn">buy now</button></a>

    </div>

</div>

</section>

<!-- featured section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading"> <span> product gallery </span> </h1>

<ul class="controls">
    <li class="btn button-active" data-filter="all">all</li>
    <li class="btn" data-filter="t-shirts">clothes</li>
    <li class="btn" data-filter="pants">shoes</li>
</ul>

<div class="image-container">

    <div class="box phone">
        <div class="image">
            <img src="images/tee.jpg" alt="">
        </div>
        <div class="info">
            <h3>T-shirt</h3>
            <div class="subInfo">
                <strong class="price">Rs1000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box phone">
        <div class="image">
            <img src="images/womestee.jpg" alt="">
        </div>
        <div class="info">
            <h3>T-shirt</h3>
            <div class="subInfo">
                <strong class="price">Rs1000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box laptop">
        <div class="image">
            <img src="images/pantgreen.jpg" alt="">
        </div>
        <div class="info">
            <h3>Pant</h3>
            <div class="subInfo">
                <strong class="price">Rs2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box shoes">
        <div class="image">
            <img src="images/pantwomens.jpg" alt="">
        </div>
        <div class="info">
            <h3>pant</h3>
            <div class="subInfo">
                <strong class="price">Rs1000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box laptop">
        <div class="image">
            <img src="images/s.jpg" alt="">
        </div>
        <div class="info">
            <h3>Shoes</h3>
            <div class="subInfo">
                <strong class="price">Rs2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box headphone">
        <div class="image">
            <img src="images/s1.jpg" alt="">
        </div>
        <div class="info">
            <h3>Shoes</h3>
            <div class="subInfo">
                <strong class="price">Rs2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  

    <div class="box shoes">
        <div class="image">
            <img src="images/s2.jpg" alt="">
        </div>
        <div class="info">
            <h3>shoes</h3>
            <div class="subInfo">
                <strong class="price">Rs2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div> 

    <div class="box headphone">
        <div class="image">
            <img src="images/s3.jpg" alt="">
        </div>
        <div class="info">
            <h3>shoes</h3>
            <div class="subInfo">
                <strong class="price">Rs2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div> 

    <div class="box headphone">
        <div class="image">
            <img src="images/s4.jpg" alt="">
        </div>
        <div class="info">
            <h3>Shoes</h3>
            <div class="subInfo">
                <strong class="price">Rs2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div> 

</div>

</section>

<!-- gallery section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

<h1 class="heading"> <span> best deals </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/home_img3.jpg" alt="">
        <div class="content">
            <h3>latest pants</h3>
            <p>upto 25% off on first purchase</p>
        </div>
    </div>

    <div class="box">
        <img src="images/latest.jpg" alt="">
        <div class="content">
            <h3>latest shoes</h3>
            <p>upto 25% off on first purchase</p>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Don’t worry, our team of ninjas will go out fighting to deliver your package on time</p>
    </div>

    <div class="icons">
        <i class="fas fa-user-clock"></i>
        <h3>24 x 7 support</h3>
        <p>Assistance for them, peace of mind for you!</p>
    </div>

    <div class="icons">
        <i class="fas fa-money-check-alt"></i>
        <h3>easy payments</h3>
        <p>No money in online payment? We got you covered, easily accpeted cash on delivery</p>
    </div>

    <div class="icons">
        <i class="fas fa-box"></i>
        <h3>10 days replacements</h3>
        <p>Didn't like the product? We can easily make new replacement within 10 days</p>
    </div>

</div>

</section>

<!-- deal section ends -->

<!-- newsletter section starts  -->

<!-- <section class="newsletter"> -->

    <!-- <h1>newsletter</h1> -->
    <!-- <p>get in touch for latest discounts and updates</p> -->
    <!-- <form action=""> -->
        <!-- <input type="email" placeholder="enter your email"> -->
        <!-- <input type="submit" class="btn"> -->
    <!-- </form> -->

<!-- </section> -->

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  shopping </a>
            <p>Whatever you’ve got in mind, we’ve got inside.
            Transforming shopping into an experience
            </p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">arrival</a>
            <a href="#">featured</a>
            <a href="#">gallery</a>
            <a href="#">deal</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
                Kathmandu, Nepal 
                Nepal - 01-4810284
            </p>
            <p> <i class="fas fa-phone"></i>
                +98-9818131390
            </p>
            <p> <i class="fas fa-globe"></i>
                www.karnali.com
            </p>
        </div>

    </div>



</section>

<!-- footer section ends -->











<!-- jquery cdn link  -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- owl carousel js file cdn link  -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->

<!-- custom js file link  -->
<!-- <script src="main.js"></script> -->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script type="text/javascript">
	function setLeft(str)
	{
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(str=="hide")
				{
					document.getElementById("left_side").style.display='none';
					document.getElementById("left_side_show").style.display='';
				}
				if(str=="show")
				{
					document.getElementById("left_side").style.display='';
					document.getElementById("left_side_show").style.display='none';
				}
			}
		}
		xmlhttp.open("GET","setSession.php?q=nice",true);
		xmlhttp.send();
	}


</script>
</body>
</html>