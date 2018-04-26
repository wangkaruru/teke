<!DOCTYPE HTML>
<!--
    Projection by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>Teke</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/main.css" />

    </head>
    <body>

        <!-- Header -->
            <header id="header">
                <div class="inner">
                    <img src="images/teketeke.png"  class="logo">


                    <nav id="nav">
                        <a href="{{ url('/') }}">Home</a>

                        <a href="{{ url('nearestplace') }}">Nearest Place</a>
                        <a href="{{ url('tekeride') }}">Find Me</a>
                        <a href="{{ url('tekeride') }}">Teke Ride</a>

                    </nav>
                     
                    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>


                </div>
                
            </header>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <header>
                      
                        <a href="{{ url('ridewithteke') }}" class="button1">Get A Ride</a>
                   
                    </header>
                    <br>
                    <div class="flex ">

                        <div>
                            <span class="icon fa-institution"></span>
                            <h3>Nearest Place</h3>
                            <p></p>
                        </div>

                        <div>
                            <span class="icon fa-group"></span>
                            <h3>Find Me</h3>
                            <p></p>
                        </div>

                        <div>
                            <span class="icon fa-car"></span>
                            <h3>Teke Ride</h3>
                            <p></p>
                        </div>

                    </div>

                   
                     <footer>
                        <img src="images/download2.png" >
                    </footer>
                </div>
            </section>


        <!-- Three -->
            <section id="three" class="wrapper align-center">
                <div class="inner">
                    <div class="flex flex-2">
                        <article>
                            <div class="image round">
                                <img src="images/cf.jpg" alt="Pic 01" />
                            </div>
                            <header>
                                <h3>Teke Rides<br /> </h3>
                            </header>
                            <p>Wherever you are you can easily access a ride from any part of the country </p>
                            <footer>
                                <a href="{{ url('ridewithteke') }}" class="button">Get a ride</a>
                            </footer>
                        </article>
                        <article>
                            <div class="image round">
                                <img src="images/uber1.jpg" alt="Pic 02" />
                            </div>
                            <header>
                                <h3>Sign up to drive with Teke<br /> </h3>
                            </header>
                            <p>Do business with Teke by becoming a driver with us</p>
                            <footer>
                                <a href="{{ url('findme') }}" class="button">Drive with Teke</a>
                            </footer>
                        </article>
                    </div>
                </div>
            </section>

        <!-- Footer -->
            
<footer id="footer">
                
                    <div class="row">
                        <div class="column">
                            <h4>Quick Links</h4>
                         <a href="{{ url('/') }}">Home</a><br>
                           <a  href="#">Nearest Place</i></a><br>
                            <a  href="#">Find Me</i></a><br>
                             <a  href="#">Teke Ride</i></a><br>
                              <a  href="#">Blog</i></a>
                        </div>
                        <div class="column"><h4>Follow Us</h4>
                             <a  href="https://twitter.com/"><i class="fa fa-twitter" style="font-size: 1.5em;"></i></a>
                     <a  href="https://www.facebook.com/" ><i class="fa fa-facebook" style="font-size: 1.5em;" ></i></a>
                       <a href="https://instagram.com/" ><i class="fa fa-instagram" style="font-size: 1.5em;"></i></a>  
                            
                         </div>
                        <div class="column">
                          
                          <h4>Contact Us</h4>
                            
                            <text>Email</text><br>
                            <text>Phone</text><br>
                            <text>Location</text><br>
                            
                        </div>
                        
                    </div>
                    
                   <div>
                    
                   </div>
                    <div>
                       <a  href="{{ url('terms') }}">Terms and Conditions</a> | <a  href="{{ url('privacypolicy') }}">Privacy Policy</a>  
                    </div>
                    <div class="copyright">

                        &copy; All Rights Reserved <a href="#">Teke</a> <a href="#">2018</a>.
                    </div>
                    
               
            </footer>
        <!-- Scripts -->
            <script src="js/jquery.min.js"></script>
            <script src="js/skel.min.js"></script>
            <script src="js/util.js"></script>
            <script src="js/main.js"></script>

    </body>
</html>