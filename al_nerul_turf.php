<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon_2.png"  >
        <link rel="stylesheet" href="nerul.css">
        <title>Khelo</title>
    </head>
    
    <body>
        
<!--        Navigation Bar-->
        <nav>
            <ul>
            <li><a href="http://localhost/Brackets/user_info.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
                <li class="navbar"><a href="http://localhost/Brackets/al_aboutus.php">About Us</a></li>
                <li class="navbar"><a href="http://localhost/Brackets/dashboard.php"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </nav>
        
<br>
        <div class="heading">
            <h1 style="font-size: 50px;">NERUL</h1>
        </div>
    </body>
    
<!--    CONTAINER1-->
    <div class="turfs">
        <div class="card">
            <img alt="" src="terna%20turf%202.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">Terna Turf</h2>
                <p class="price">INR 2,000.00</p>
                <p>Nerul</p>
                <a href="http://localhost/Brackets/al_nerulturf1.php"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="xaviers.jpg" >
            <div class="details">
                <h2 style="font-size: 16px;">Xaviers</h2>
                <p class="price">INR 1,500.00</p>
                <p>Nerul</p>
                <a href="http://localhost/Brackets/al_nerulturf2.php"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="trickshot.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">TrickShot</h2>
                <p class="price">INR 1,500.00</p>
                <p>Nerul</p>
                <a href="http://localhost/Brackets/al_nerulturf3.php"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="gymkhana%20turf.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">Gymkhana</h2>
                <p class="price">INR 1,500.00</p>
                <p>Nerul</p>
                <a href="http://localhost/Brackets/al_nerulturf4.php"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="Don%20bosco%20turf.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">DonBosco</h2>
                <p class="price">INR 1,500.00</p>
                <p>Nerul</p>
                <a href="http://localhost/Brackets/al_nerulturf5.php"><p><button>Book Now</button></p></a>
            </div> 
        </div>
    </div>
    
    
    
    
    
    
    <div class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1IAXYM1fmXJ8yYjjXaOF55nRi8mDJfOTo"></iframe>
    </div>
    
    <footer>
            <div class="social_links">
                <a class="soacial" href=""><img class="social_img" alt="" src="facebook.png"> </a>
                <a class="soacial" href=""><img class="social_img" alt="" src="twitter%20(1).png"> </a>
                <a class="soacial" href=""><img class="social_img" alt="" src="gmail.png"> </a>
            </div>
            <div class="contact_details">
                <a class="contact" href="contact_us.html"><b>Contact Us</b></a>
                <a class="contact" href="about_us.html"><b>About Us</b></a>
<!--                <a class="soacial" href=""></a>-->
            </div>
    </footer>
        
</html>