                <footer>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="p">
                                &copy; Copyright 2000 - <?php echo date("Y"); ?> Kosrae Nautilus <a href="newsletter.php">Join Our Mailing List!</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p">
                                <a class="thinkzion" href="http://www.thinkzion.com">Site by ThinkZion</a>
                            </div>
                        </div>
                    </div>
                  <nav>
                      <ul>
                         <li>
                            <a href="index.php"><span>Home</span></a>
                         </li>
                         <li>
                            <a href="about.php"><span>About</span></a>
                         </li>
                         <li>
                            <a href="accommodation.php"><span>Accommodation</span></a>
                         </li>
                         <li>
                            <a href="dining.php"><span>Dining</span></a>
                         </li>
                         <li>
                            <a href="activities.php"><span>Activities</span></a>
                         </li>
                         <li>
                            <a href="contact.php"><span>Contact Us</span></a>
                         </li>
                         <li class="bookfooter">
                            <a href="https://ibookpacific.com/kosrae-nautilus-resort/"><span>Book Now</span></a>
                         </li>
                        </ul>
                        <ul class="socialmedia">
                          <li class="social-twitter"><a href="https://twitter.com/kosrae_nautilus"></a></li>
                          <li class="social-facebook"><a href="http://www.facebook.com/pages/Kosrae-Nautilus-Resort/101299289627"></a></li>
                          <li class="social-linkedin"><a href="https://www.linkedin.com/company/17923935/"></a></li>
                          <li class="social-youtube"><a href="https://www.youtube.com/channel/UCO7Ln_dwcX3ASL5JW6Ba3PQ"></a></li>
                       </ul>
                    </nav>
                </footer>
                <header>                
                    <div class="header-contents">
                        <h1>Kosrae Nautilus Resort</h1>                        
                       <nav>
                          <ul>
                             <li>
                                <a href="index.php"><span>Home</span></a>
                             </li>
                             <li>
                                <a href="about.php"><span>About</span></a>
                             </li>
                             <li>
                                <a href="accommodation.php"><span>Accommodation</span></a>
                             </li>
                             <li>
                                <a href="dining.php"><span>Dining</span></a>
                             </li>
                             <li>
                                <a href="activities.php"><span>Activities</span></a>
                             </li>
                             <li>
                                <a href="contact.php"><span>Contact Us</span></a>
                             </li>
                             <li class="book">
                                <a href="https://ibookpacific.com/kosrae-nautilus-resort/">Book Now</a>  
                             </li>
                          </ul>	
                        </nav>
                        <div class="logo">
                           <a href="index.php"><img src="img/logo.png"></a>
                        </div>
                        <div id="navIcon" class="handle">
                          <span></span>
                          <span></span>
                          <span></span>
                        </div>
                    </div>
                </header>                
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <?php
            //check if running on localhost as opposed to the server
            $sapi_type = php_sapi_name();
            if (substr($sapi_type, 0, 3) !== 'cgi') {
                echo("<script src='js/main.js?version=" . hash_file('md5', 'js/main.js') . "'></script>");
            } else {
                echo("<script src='js/main.es5.min.js?version=" . hash_file('md5', 'js/main.es5.min.js') . "'></script>");
            }
        ?>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <?php
            //check if running on localhost as opposed to the server
            $sapi_type = php_sapi_name();
            if (substr($sapi_type, 0, 3) == 'cgi') {
                echo("<script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-89153572-1', 'auto');
                    ga('send', 'pageview');
                </script>");
            }
        ?>
    </body>
</html>