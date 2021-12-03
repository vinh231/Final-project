<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinPlayStation Store</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


</head>
<body>
<!-- -----------header----------- -->
    <section class="sup-header">
        <nav>
            <a href="main.html"><img src="images/logo1.png" alt=""></a>
            <div class="nav-links" id="navLinks"> 
                <ion-icon name="arrow-round-forward" class="fa" onclick="hideMenu()"></ion-icon>
            <ul>
                <li><a href="Main.html">HOME</a></li>
                <li><a href="About.html">ABOUT</a></li>
                <li><a href="">PRODUCT</a></li>
                <li><a href="">BLOG</a></li>
                <li><a href="">CART</a></li>
                <li><a href="">ACCOUNT</a></li>
            </ul>
            </div>
            <ion-icon name="menu" class="fa" onclick="showMenu()"></ion-icon>
        </nav>

   <h1>Information Store</h1> 
    </section>


    <!-- about us content -->
    <section class="about-us">
       
        <div class="row">
            <div class="about-col">
                <h1>Information Store</h1>
<p>PlayStation (PS) is a game console from Sony. Initially, it was born with the idea of ​​a machine serving a variety of user needs: listening to music, watching videos, watching movies, ... not simply serving games. Up to now, PS is still a machine developed by Sony in the direction of multitasking besides fulfilling its role as a game console very well. Therefore, stores want to bring the features of the product to consumers, serving the essential requirements in the current 4.0 times.

   <br> The store was established with the purpose of serving customer needs and customer experience about products. All products are genuine and not counterfeit.</p>                
            </div> 
            <div class="about-col">
                <img src="images/inf-st2.jpg" alt="">
            </div>           
        </div>


        <div class="row">
            <div class="about-col">
                <img src="images/inf-st.jpg" alt="">
            </div>
            <div class="about-col">
                <h1>Team</h1>
<p>The store was established with a team of 6 members, with the goal of giving customers the experience of services including products and meeting customer needs. The store has its head office in Ho Chi Minh City and the remaining shipping branches in the UK, Australia, Canada and the US.</p>                
            </div> 
                 
            
        </div>
        <div class="row-1">
            <div class="about-col">
                <h1>Location/ Contact Us</h1>
                <div>
                    <p>636 Lê Quang Định Gò Vấp, Thành phố Hồ Chí Minh / Phone: 077-852-3146 / Mail: vinhltgcs18415@fpt.edu.vn</p>     
                </div>
                <div>
                    
                        <li>Monday   9:00am - 5:00pm</li>
                        <li>Tuesday   9:00am - 5:00pm</li>
                        <li>Wednesday   9:00am - 5:00pm</li>
                        <li>Thursday   9:00am - 5:00pm</li>
                        <li>Friday   9:00am - 5:00pm</li>
                        <li>Saturday   9:00am - 5:00pm</li>
                        <li>Sunday   Closed</li>
                          
                    
                </div>                
            </div> 
            <div class="contact-in">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31355.91079865315!2d106.68847318909064!3d10.773821271660422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f385570472f%3A0x1787491df0ed8d6a!2sIndependence%20Palace!5e0!3m2!1sen!2s!4v1628668870167!5m2!1sen!2s" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contact-form">
                    <h1>Contact Us</h1>
                    <form action="">
                        <input type="text" placeholder="Name" class="contact-form-text">
                        <input type="email" placeholder="Email" class="contact-form-text">
                        <textarea  placeholder="Feedback" class="contact-form-textarea"></textarea>
                        <input type="submit" name="Submit" class="contact-form-btn blu-btn">
                    </form>
                </div>
            </div>        
        </div>
        
    </section>






<!-- ---------footer---------- -->
    <section class="footer">
        <h4>Thanks You !!!</h4>
        <p>Thank you for being our valued customer. We are so grateful for the pleasure of serving you and hope we met your expectations.</p>
     <div class="icons">
        <ion-icon name="logo-facebook" class="ic" ></ion-icon>
        <ion-icon name="logo-instagram" class="ic"></ion-icon>
        <ion-icon name="logo-youtube" class="ic"></ion-icon>
        <ion-icon name="logo-twitter" class="ic"></ion-icon>
    </div>
    <p>In-store pricing may vary. Prices and offers are subject to change. © 2021 Best Buy. All rights reserved. VIN PLAYSTATION, the VIN PLAYSTATION logo, the tag design, and MY VIN PLAYSTATION are <br> trademarks of Vin PlayStation and its affiliated companies.</p>






    </section>











    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
</body>
</html>