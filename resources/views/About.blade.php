@extends('app')

@section('content')
<body>
<!-- -----------header----------- -->



    <!-- about us content -->
    <section class="about-us">
        <div class="row-1">
            <div class="about-col">
                <h1>Our Story/ Values</h1>
                <p>PlayStation was the brainchild of Ken Kutaragi, a Sony executive who managed one of the company's hardware engineering divisions and was later dubbed "The Father of the PlayStation".
                    <br>PlayStation (PS) is a game console from Sony. Initially, it was born with the idea of ​​a machine serving a variety of user needs: listening to music, watching videos, watching movies, ... not simply serving games. Up to now, PS is still a machine developed by Sony in the direction of multitasking besides fulfilling its role as a game console very well.
                </p>                
                <a href="StoryStore.html" class="hero-btn blu-btn">EXPLORE NOW</a>
            </div> 
            <div class="about-col-1">
                <img src="images/story.png" alt="" width="60%">
            </div>           
        </div>


        <div class="row">
            <div class="about-col">
                <h1>Information Store</h1>
                <p>PlayStation (PS) is a game console from Sony. Initially, it was born with the idea of ​​a machine serving a variety of user needs: listening to music, watching videos, watching movies, ... not simply serving games. Up to now, PS is still a machine developed by Sony in the direction of multitasking besides fulfilling its role as a game console very well.
                    <br>The store was established with the purpose of serving customer needs and customer experience about products. All products are genuine and not counterfeit.</p>
                <a href="Inforstore.html" class="hero-btn blu-btn">EXPLORE NOW</a>
            </div> 
            <div class="about-col">
                <img src="images/inf-st2.jpg" alt="">
            </div>           
        </div>


        <div class="row">
            <div class="about-col">
                <img src="images/inf-pd1.jpg" alt="">
            </div>
            <div class="about-col">
                <h1>About Product</h1>
<p>Playstation is the name of a game console developed by Sony Computer Entertainment. Playstation is merged from Play and Station - Meaning of the company's original orientation as a multi-function entertainment device/station: Play Music, Play Video, and Play Game, not purely gaming like its competitors was Nintendo back then.
   </p>
                <a href="Infproduct.html" class="hero-btn blu-btn">EXPLORE NOW</a>
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
@stop
